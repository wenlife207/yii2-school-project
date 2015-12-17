<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Reqform */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reqform-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'userdepart')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createtime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'begindate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enddate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'handledepart')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
