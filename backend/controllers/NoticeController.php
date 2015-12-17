<?php

namespace backend\controllers;

use Yii;
use common\models\Notice;
use backend\models\NoticeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

use common\config\ConfigParam;

/**
 * NoticeController implements the CRUD actions for notice model.
 */
class NoticeController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all notice models.
     * @return mixed
     */
    public function actions()
    {
        return [
           'Kupload'=>['class'=>'pjkui\kindeditor\KindEditorAction'],
        ];
    }
    public function actionIndex()
    {
        $searchModel = new NoticeSearch();
       // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $dataProvider = new ActiveDataProvider([
                     'query' => $searchModel->find(),
                     'pagination' => ['pagesize' => '10'],
                    ]);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionList($category)
    {
        $dataProvider = new ActiveDataProvider(['query'=>Notice::find()->where(['category'=>$category])]);
        return $this->render('list',['dataProvider'=>$dataProvider]);
    }

    public function actionDetail($id)
    {
        return $this->render('detail',['model'=>$this->findModel($id)]);
    }
    /**
     * Displays a single notice model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new notice model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new notice();
        $model->initCreate();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing notice model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing notice model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the notice model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return notice the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = notice::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
