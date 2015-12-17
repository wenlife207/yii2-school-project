<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Reqform */

$this->title = 'Create Reqform';
$this->params['breadcrumbs'][] = ['label' => 'Reqforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reqform-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
