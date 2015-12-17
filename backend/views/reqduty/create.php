<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Reqduty */

$this->title = 'Create Reqduty';
$this->params['breadcrumbs'][] = ['label' => 'Reqduties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reqduty-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'scope'=>$scope,
    ]) ?>

</div>
