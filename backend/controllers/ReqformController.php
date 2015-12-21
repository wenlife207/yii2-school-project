<?php

namespace backend\controllers;

use Yii;
use common\models\Reqform;
use backend\models\ReqformSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\libary\req\ReqFormFactory;
use backend\libary\req\ReqRecord;
use common\models\Reqhandlerecord;


use backend\libary\req\PurchaseRequest;
/**
 * ReqformController implements the CRUD actions for Reqform model.
 */
class ReqformController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                   // 'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Reqform models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ReqformSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Reqform model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $reqFormFactory = new ReqFormFactory();
        $reqForm = $reqFormFactory->createRequest($model);
        //$handleRecord = ReqRecord::getRecord($reqForm);
        //$handleRecord = $reqForm->getRecord();
        //$reqForm->setSubDataByMainData();
        if(1)
        {
            $view = $reqForm->getDisplayView();
        }else{
            $view = 'not_allowed';
        }

        $reqForm->getHandleOption();
        return $this->render($view, [
            'model' => $reqForm->getMainData(),
            'subModel'=>$reqForm->getSubData(),
            'handle'=>$reqForm->getHandleOption(),
            'record'=>$reqForm->getRecord(),
        ]);
    }

 
    /**
     * Creates a new Reqform model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($type)
    {
        $model = new Reqform();
        $model->type = $type;
        $reqFormFactory = new ReqFormFactory();
        $reqForm = $reqFormFactory->createRequest($model);

        if(Yii::$app->request->post()){
            $reqForm->load(Yii::$app->request->post());
            if($reqForm->save())
            {
                 //写入操作记录
                $record = ['act'=>'新建'];
                $reqForm->addRecord($record);
              //  $ReqHandleRecord = ReqRecord::createRecord($reqForm,$record);
            }
           
            return $this->redirect(['/reqform']);
        }else{
            return $this->render($reqForm->getFormView(),['model'=>$reqForm->getMainData(),'subModel'=>$reqForm->getSubData()]);
        }
    }


    /**
     * Updates an existing Reqform model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {

        $model = $this->findModel($id);
        $reqFormFactory = new ReqFormFactory();
        $reqForm = $reqFormFactory->createRequest($model);
    
        if ($post = Yii::$app->request->post()) {
            $reqForm->load($post);
            $reqForm->save();
            $record = ['act'=>'修改'];
            $reqForm->addRecord($record);
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render($reqForm->getFormView(), [
                'model' => $reqForm->getMainData(),
                'subModel'=>$reqForm->getSubData(),
            ]);
        }
    }

    /**
     * Deletes an existing Reqform model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    public function actionAudit($id)
    {
            $model = $this->findModel($id);
            $reqFormFactory = new ReqFormFactory();
            $reqForm = $reqFormFactory->createRequest($model);

            if ($post = Yii::$app->request->post()) {

                   $reqForm->setHandleDepart($post['handle']);
                   $reqForm->audit(); 

                    if($reqForm->save())
                    {
                            $record = ['act'=>'审批','note'=>$post['msg']];
                            $reqForm->addRecord($record); 
                            $this->redirect(['reqform/index']);
                    }else{
                            exit('Unexpected Error!');
                    }     
            }else{
                $view = 'audit';
                return $this->render($view, [
                         'model' => $reqForm->getMainData(),
                         'subModel'=>$reqForm->getSubData(),
                         'handle'=>$reqForm->getHandleOption(),
                ]);
            }
    }

    public function actionHandle($id)
    {
            $model = $this->findModel($id);
            //$purchase = new PurchaseRequest();
            $reqFormFactory = new ReqFormFactory();
            $reqForm = $reqFormFactory->createRequest($model);

             return $this->render('handle', [
                    'model' => $reqForm->getMainData(),
                    'subModel'=>$reqForm->getSubData(),
                    'handle'=>$reqForm->getHandleOption(),
                ]);
    }


    /**
     * Finds the Reqform model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Reqform the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Reqform::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
