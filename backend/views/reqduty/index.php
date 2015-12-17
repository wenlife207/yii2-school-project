<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReqdutySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reqduties';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reqduty-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reqduty', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'role',
            'duty',
            'scope',
            'param',
            // 'addon',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
