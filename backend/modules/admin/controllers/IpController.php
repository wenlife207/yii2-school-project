<?php

namespace backend\modules\admin\controllers;

use Yii;
use backend\models\Ip;
use backend\models\Charge;
//use backend\models\IpSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\libary\Telnet;
use yii\filters\AccessControl;

/**
 * IpController implements the CRUD actions for Ip model.
 */
class IpController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
             //   'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                       // 'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                   // 'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Ip models.
     * @return mixed
     */
    public function actionIndex()
    {
       //$searchModel = new IpSearch();
       // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $telnet = new telnet();
        $loginMsg = $telnet->signin();
       
        $ipWithMac = $telnet->getIpAndMac();
        $telnet->close();
        $ipModel = new Ip();
        $iPFiltedByDatabase = array();
        foreach ($ipWithMac as $key => $value) {
            if ($ipInDatabase = $ipModel->find()->where(['ip'=>$key])->one())
            {
                $ipInDatabase->mac =$value;
                $iPFiltedByDatabase[$key]= $ipInDatabase;
            }else{
                $iPFiltedByDatabase[$key] = $value;
            }
        }
        
        $ipChargein  = $ipModel->find()->where(['type'=>2])->orderBy('ip')->all();
        $ipChargeout = $ipModel->find()->where(['type'=>3])->orderBy('ip')->all();
         
        return $this->render('index', [
            //'searchModel' => $searchModel,
           // 'dataProvider' => $dataProvider,
            'ipArray'=>$iPFiltedByDatabase,
            'loginMsg'=>$loginMsg,
            'ipChargein'=>$ipChargein,
            'ipChargeout'=>$ipChargeout,
        ]);
    }

    /**
     * Displays a single Ip model.
     * @param integer $id
     * @return mixed
     */
    public function actionView()
    {
        error_reporting(-1); 
        
        $telnet = new Telnet();

        $telnet->signin();

        $string = $telnet->getSystemInfo();

        $telnet->close();

        var_export($string);

        echo $telnet->close(); 
        
    }


    /**
    *
    *仅仅向数据库添加未添加的绑定数据，不能向交换机绑定
    **/
    public function actionAdd($ip,$mac)
    {
        $model = new Ip();
        $model->ip = $ip;
        $model->mac = $mac;
      if ($model->load(Yii::$app->request->post()) && $model->save()) {
            exit('绑定成功！');
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }

    }

    /**
     * Creates a new Ip model.
     * 创建一个新的IP绑定，并且将绑定数据存入数据库
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Ip();

        if ($post = Yii::$app->request->post()) {
            $model->load(Yii::$app->request->post());
            $telnet = new telnet();
            $loginMsg = $telnet->signin();
            $telnet->bind($model->ip,$model->mac);
            $telnet->close();

            
            $model->save();
            if ($model->type==3) {
                return $this->redirect(['charge','ip'=>$model->ip]);
            }else{
                return $this->redirect(['index']);     
            }
           
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Ip model.
     * 修改绑定数据，同时修改交换机和数据库
     * @param integer $ip IP地址
     * @return mixed
     */
    public function actionUpdate($ip)
    {
        $model = Ip::find()->where(['ip'=>$ip])->one();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $telnet = new Telnet();
            $telnet->signin();
            $telnet->rebind($model->ip,$model->mac);
            $telnet->close();
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Ip model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($ip)
    {
        $telnet = new Telnet();
        $msg = $telnet->signin();

        $telnet->unbind($ip);
        $telnet->close();

        if($model = Ip::find()->where(['ip'=>$ip])->one())
        {
            $model->delete();
        }
        
        return $this->redirect(['index']);
    }

    /**
    *
    */
    public function actionCharge($ip)
    {

        $model = Charge::find()->where(['ip'=>$ip])->one();
        $ipModel =Ip::find()->where(['ip'=>$ip])->one();
        if(!$model)
        {
            $model = new Charge();
            $model->ip = $ip;
        }


        if ($model->load(Yii::$app->request->post())) {

            if ($model->state != 'state_normal') {
                
                $telnet = new Telnet();
                $telnet->signin();
                $telnet->rebind($ip,$ipModel->mac);
                $telnet->close();
                $model->state = "state_normal";
            }
        
            $model->save();
            return $this->redirect(['index']);
        } else {
            return $this->render('charge', [
                'model' => $model,
            ]);
        }
    }

    public function actionDisconnect($ip)
    {
        if($model = Charge::find()->where(['ip'=>$ip])->one())
        {
            $model->state = 'state_disconnect';
            $model->save();
        }
        $telnet = new Telnet();
        $telnet->signin();
        $telnet->rebind($ip,"eeee-eeee-eeee");
        $telnet->close();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Ip model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Ip the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ip::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
