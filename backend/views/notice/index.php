<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\config\ConfigParam;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NoticeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Notices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notice-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php //var_export(ConfigParam::getConfig('importance','title'))?>
    <p>
        <?= Html::a('Create Notice', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'title',
            'publisher',
            ['attribute'=>'importance','value'=>function($model){ return ConfigParam::getConfig('importance','title',$model['importance']);}],
            'begindate',
             'enddate',
             //'content:ntext',
             'publishdate',
             ['attribute'=>'category','value'=>function($model){return ConfigParam::getConfig('category','title',$model['category']);}],

            ['class' => 'yii\grid\ActionColumn'],
        ],
        'pager'=>['options'=>['class'=>'pagination center-block']],
    ]); ?>

</div>
