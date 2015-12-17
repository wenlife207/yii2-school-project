<?php
namespace backend\libary\req;

use commom\models\ReqDuty;
use common\models\ReqHandleRecord;
/**
 * 该类主要用于对操作者权限的确定
 * 1、操作者是否拥有读取该申请的权限
 * 2、操作者可以进行那些操作
 * 该类的成员为：操作者和申请对象；
 * 操作流程的配置
 */
class ReqDutyHandle
{
	protected $reqForm;
	protected $userName;
   static protected $scope = [
         'all'=>'全局',
         'category'=>'类别',
         'single'=>'指定',
   ];

   function __construct($reqForm,$userName)
   {
      $this->reqForm = $reqForm;
      $this->userName = $userName;
   }

  
   public function getUserDuty()
   {
	  return $userDuty = ReqDuty::find()->where(['username'=>$this->username])->one();
   }

   static public function getScope()
   {
      return self::$scope;
   }

   public function setSingleDuty(ReqDuty $duty)
   {
       $duty->save();
   }

   public function checkDuty($opr)
   {
      switch ($opr) {
         case 'view':
           return $this->checkViewDuty();
            break;
         case 'update':
            return $this->checkUpdateDuty();
            break;
         case 'delete':
            return $this->checkDeleteDuty();
            break;
         case 'audit':
            return $this->checkAuditDuty();
            break;
         case 'handle':
            return $this->checkHandleDuty();
            break;

         case 'feedback':
            return $this->checkFeedbackDuty();
            break;
         
         default:
            exit('This DUty has not been set!');
            break;
      }
   }

   protected function checkViewDuty()
   {
   		return true;
   }

   protected function checkUpdateDuty()
   {
      return true;
   }

   protected function checkDeleteDuty()
   {
      return true;
   }

   protected function checkAuditDuty()
   {
   		return true;
   }

   protected function checkHandleDuty()
   {
   		return true;
   }

   protected function checkFeedbackDuty()
   {
   		return true;
   }

}
?>