<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\config\ConfigParam;

/* @var $this yii\web\View */
/* @var $model common\models\UserInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //$form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idcard')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'level')->dropDownList(ConfigParam::getConfig('level','title'),['class'=>'input-sm col-2'])?>

    <?= $form->field($model, 'graduation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'degree')->dropDownList(ConfigParam::getConfig('degree','title'),['class'=>'input-sm'])?>

    <?= $form->field($model, 'intro')->textarea(['rows' => 6]) ?>

    <?php //$form->field($model, 'status')->textInput()  ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
