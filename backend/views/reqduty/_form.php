<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Reqduty */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reqduty-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'role')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duty')->textInput(['maxlength' => true]) ?>

   <!--  <?= $form->field($model, 'scope')->textInput(['maxlength' => true]) ?> -->
   <?= $form->field($model, 'scope')->dropDownList($scope,['maxlength'=>true]) ?>

    <?= $form->field($model, 'param')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addon')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
