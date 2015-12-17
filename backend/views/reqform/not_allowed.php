<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Reqform */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Reqforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reqform-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <h1 class="text-warning center">you dont have pri to do this thing!</h1>

</div>
