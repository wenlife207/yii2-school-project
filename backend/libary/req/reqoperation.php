<?php
namespace backend\libary\req;

interface ReqOperation
{
	/**
     * 采用接口来实现
     * @var [type]
     */
    protected $operations = [
             'new'=>['name'=>'新建','state'=>'待审批'],
           'audit'=>['name'=>'审批','state'=>'代办理'],
          'handle'=>['name'=>'办理','state'=>'待确认'],
        'feedback'=>['name'=>'反馈','state'=>'已完成']
    ];
    
    public function operationOrder()
}

?>