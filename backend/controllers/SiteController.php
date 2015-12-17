<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use common\models\SignupForm;
use yii\data\ActiveDataProvider;
use common\models\Notice;
use common\config\ConfigParam;
use common\models\UserInfo;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error','signup'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query'=>Notice::find(),
           // 'pagination'=>['pagesize'=>5],
            ]);
        $noticeDataProviders = array();
        $category = ConfigParam::getConfig('category','title');
        foreach ($category as $key => $value) {
            $data = new ActiveDataProvider([
                'totalCount'=>10,
                'pagination'=>['pageSize'=>10],
                'query'=>Notice::find()->where(['category'=>$key])->orderBy('publishdate desc'),
                
                ]);
            $noticeDataProviders[$key] = ['title'=>$value,'dataProvider'=>$data];
        }
        return $this->render('index',['dataProvider'=>$dataProvider,'notice'=>$noticeDataProviders]);
    }



    public function actionSignup()
    {
        $model = new SignupForm();
        $modelInfo = new UserInfo();
        if ($model->load(Yii::$app->request->post())&&$modelInfo->load(Yii::$app->request->post())) {
            $modelInfo->username = $model->username;
            if (($user = $model->signup())&&$modelInfo->save()) {

                // if (Yii::$app->getUser()->login($user)) {
                //     return $this->goHome();       
                // }
                return $this->render('hint',['hint'=>'注册成功，请联系信息技术中心激活账号，然后才能访问系统！']);

            }else{

                if ($user) {
                   $user->delete();
                 //  exit('注册失败，请联系管理员解决问题或者仔细检查输入信息');
                }
                 
            }
        }
        return $this->render('signup', [
            'model' => $model,
            'modelInfo'=>$modelInfo,
        ]);
    }
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
