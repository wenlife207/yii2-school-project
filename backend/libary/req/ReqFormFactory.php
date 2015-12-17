<?php

namespace backend\libary\req;

use common\models\ReqForm;
use backend\libary\PurchaseRequst;
/**
 * 该类是一个工厂类 负责生成符合要求的申请类的子类
 * 来实现对申请的动态生成
 */
class ReqFormFactory{

      public function createRequest($model)
      {
            switch ($model->type) {
            case 'req_purchase':
                  return new PurchaseRequest($model);
                  break;
            case 'req_leave':
                  return new LeaveRequest($model); 
            default:
                  exit('未知申请，请重新选择！');
                  break;
      }
      }
      
}

?>0