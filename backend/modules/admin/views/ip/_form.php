<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ip */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ip-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
       if ($model->isNewRecord) {
           echo $form->field($model, 'ip')->textInput(['maxlength' => 20]);
       }else{
            echo $form->field($model, 'ip')->textInput(['maxlength' => 20,'readonly'=>'readonly']);
       }

    ?>

    <?= $form->field($model, 'mac')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'type')->dropDownList(ArrayHelper::map(Yii::$app->params['userType'],'id','title'),['maxlength' => 20]) ?>

    <?= $form->field($model, 'device')->dropDownList(ArrayHelper::map(Yii::$app->params['deviceType'],'id','title'),['maxlength' => 20]) ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
