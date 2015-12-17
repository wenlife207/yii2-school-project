<?php
namespace backend\libary\req;

use Yii;
use common\models\Reqform;
use backend\libary\req\ReqDutyHandle;
use backend\libary\req\ReqRecord;

//use backend\libary\req\ReqOperation;
/**
*该类是所有申请对象的父类，负责管理通用操作，其他申请类需继承该类来完成通用的功能处理
*该系列类只能接受一个MODEL对象，在此基础上生成必须的数据，如附表等，并处理逻辑和输出，指定视图等等
*能够完成基本的处理操作，能够接受和返回FORM返回的数据，并且能够用视图显示FORM的内容
*/
abstract class ReqformHandle //implements ReqOperation
{
	protected $mainData;
	protected $SubData;
        protected $reqDutyHandle;
        protected $processType= [
                0=>'new',
                1=>'audit',
                2=>'handle',
                3=>'feedback'
        ];
        public  $state =[
                0=>'否决',
                1=>'待审批',
                2=>'待办理',
                3=>'处理完成',
        ];
	/**
	 * 接受一个MODEL对象来进行初始化
	 */
	public function  __construct(Reqform $model)
	{
		$this->mainData = $model;
                if ($model->isNewRecord) {
                  $this->initMainData();
                }
                $this->initSubData();
	}

        public function initMainData()
        {
                $this->mainData->user = Yii::$app->user->identity->username;
                $this->mainData->userdepart = null;
                $this->mainData->createtime = date('Y-m-d');
                $this->mainData->state = '1';
        }
       abstract function initSubData();
       /**
        * 通用set|get方法
	* 用于实现从数据库读取的初始化
        * @param [type]
        */
        public function setMainData($model)
        {
 	        $this->mainData = $model;
        }

       public function setSubData($model)
       {
                $this->subData = $model;
        }

        public function getMainData()
        {
                return $this->mainData;
        }

        public function getSubData()
        {
                return $this->subData;
        }
//==========================================================================================================

    /**
     * 根据ID是否设置判断是否是新记录，然后进行一些初始化的工作
     * @param  [type] POST数据
     * @return [BOOL] 设置MAINDATA属性，返回MODEL对象验证结果 
     */
    
        public function load($post)
        {
                $this->mainData->load($post);
                $this->loadSubData($post);
        }

        public function loadMainData($post)
	{
		$this->mainData->load($post);
		if (!isset($this->mainData->id)) {
			$this->initMainData();
		}
		return $this->mainData->validate();
	}

        abstract public function loadSubData($post);
 
//=========================================================================================
    /**
     * 保存到数据库
     * 并注意：数据在LOAD的时候已经验证
     * 
     * @return [type]
     */
        abstract public function save();

       public function saveMainData()
        {
                return $this->mainData->save();
        }

//=================获取视图================================================================
//
        abstract public function getFormView();
        abstract public function getdisplayView();
//=================流程控制===================================================================
    //abstract public function getProcedure();



        public function setHandleDepart($depart)
        {
               $this->mainData->handledepart = $depart;
        }

        public function audit()
        {
                $this->mainData->state = "2";
        }

        public function finish()
        {
               $this->maindata->state = '3';
        }

        public function addRecord($record)
        {
                return ReqRecord::createRecord($this->getMainData(),$record);
        }

        public function getRecord()
        {
                return ReqRecord::getRecord($this->getMainData());
           
        }

}

?>
