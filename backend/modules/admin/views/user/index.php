<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            // 'auth_key',
           // 'password_hash',
           //'password_reset_token',
           'email:email',
            'userInfo.name',
            'userInfo.phone',
             'created_at:date',
             'updated_at:date',
            ['attribute'=>'status','format'=>'raw','value'=>function($model){
                return $model->status==10?'<span class="glyphicon glyphicon-ok text-success"</span>':'<span class="glyphicon glyphicon-remove text-warning"</span>';
            }],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
