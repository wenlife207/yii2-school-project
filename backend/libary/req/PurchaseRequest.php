<?php

namespace backend\libary\req;

use yii\base\Model;
use backend\libary\req\Reqform;
use common\models\ReqItem;

use common\config\ConfigParam;
/**
 * 该类是ReqFormHandle的子类，主要负责实现购买申请的相关逻辑和视图的配置
 * 载入数据 处理数据 显示数据 保存数据这样一个流程来实现以上操作
 */
class PurchaseRequest extends ReqformHandle
{
       	protected $processType= [
      	0=>'new',
      	1=>'audit',
      	2=>'handle',
      	3=>'feedback'
	];

	public function __construct($model)
	{
		parent::__construct($model);	
	}

	public function initSubData()
	{
		if ($this->mainData->isNewRecord) {
    		$this->subData = new ReqItem();
    	}else{
    		$models = ReqItem::find()->where(['reqform_id'=>$this->mainData->id])->all();
    		$this->subData = $models;
    	}
	}
//==========set get====================
	 /**
	     * [通过POST数据载入附表的数据]
	     * 该方法用于新建和修改时返回的POST数据
	     * 新建时：需要创建数据来接受多条返回数据
	     * 修改时：subdata已经是数组，所以直接能够被模型LOAD，而且如果不这样做，无法实现对isNewRecord的判断
	     * @param  [post] [POST数组]
	     * @return [null] [POST如果没有设置ReqItem]
	*/
	public function loadSubData($post)
	{
		if(isset($post['ReqItem']))
		{	
			//如果是新建，则要组建数组	
			if(!is_array($this->subData))
			{
				$itemSum = count($post['ReqItem']);
			                $reqItems = array();
			                for ($i=0; $i <$itemSum ; $i++) { 
			        	  	$reqItems[] = new ReqItem();
			        	}
			         	$this->subData = $reqItems;
			}
		       	 return Model::loadMultiple($this->subData,$post)&&Model::validateMultiple($this->subData);
	    	}else{
	    		return null;
	    	}
	}
	    
	public function save()
	{ 
		//$main = $this->mainData;
		if($this->saveMainData())
		{  
			if(is_array($this->subData))
			{
				foreach ($this->subData as $key => $data) 
				{
					$data->reqform_id = $this->mainData->id;
					$data->save(false);
				}
				return true;
			}else{
				exit('还未设置SUBDATA不是数组的时候的保存方法！');
			}
		}
	}


	public function getFormView()
	{
	       	 return 'req/purchase';
	}	
	    /**
	     * @return [type]
	     */
	public function getdisplayView()
	{
	       	return 'req/purchaseDisplay';
	}

	public function getProcedure()
	{
	      	 return $this->processType;
	}


	    /**
	     * [获取下一步可进行的操作，并且验证是否有权限执行该操作]
	     * @return [Array] [返回可进行的操作以及URL]
	     */
	public function getHandleOption()
	{
		$opr_array = array();
		//$duty = $this->initDuty();
		//if ($duty->checkDuty('delete')) {
			$opr_array[] = ConfigParam::getConfig('operations',null,'delete');
		//}
		//if ($duty->checkDuty('update')) {
			$opr_array[] = ConfigParam::getConfig('operations',null,'update');
		//}
		//if ($this->mainData->state) {
			$opr = $this->processType[$this->mainData->state];
		//	if ($duty->checkDuty($opr)) {
				$opr_array[] = ConfigParam::getConfig('operations',null,$opr);
		//	}
		//}else{
		//	exit('mainData state not found! @_@ by handleoption in purchaseRequest');
		//}

		return $opr_array;
		
	}

}

?>