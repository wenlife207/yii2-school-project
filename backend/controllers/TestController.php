<?php

namespace backend\controllers;

use Yii;


class TestController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;
    public function actionIndex()
    {

        if(Yii::$app->request->post())
        {
             var_export(Yii::$app->request->post());
        }
		
        return $this->render('index');
    }

    public function actionUpload()
    {
	}


}
