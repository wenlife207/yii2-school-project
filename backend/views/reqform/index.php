<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReqformSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '申请单管理系统';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reqform-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
            $reqSum = ArrayHelper::map(Yii::$app->params['reqType'],'type','name');
            foreach ($reqSum as $key => $value) {
               echo  Html::a($value, ['create','type'=>$key], ['class' => 'btn btn-success']);
               echo '  ';
            }

        ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            ['attribute'=>'type','format'=>'raw','value'=>function($model){
                $reqSum = ArrayHelper::map(Yii::$app->params['reqType'],'type','name');
                return $reqSum[$model->type];
            }],
            'content:ntext',
            'user',
            // 'userdepart',
            // 'createtime',
            // 'begindate',
            // 'enddate',
            // 'handledepart',
             'state',

            [
            'class' => 'yii\grid\ActionColumn',
            'header'=>'操作',
            'template'=>'{view}',
            'buttons'=>[
                'view'=>function($url,$model,$key){return Html::a('查看',$url);},
                ],

            ],
        ],
    ]); ?>

</div>
