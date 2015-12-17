<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use common\config\ConfigParam;
AppAsset::register($this);
/* @var $this yii\web\View */
/* @var $model common\models\notice */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notice-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'category')->dropDownList(ConfigParam::getConfig('category','title'),['class'=>'input-sm']) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

<!--     <?= $form->field($model, 'publisher')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'importance')->dropDownList(ConfigParam::getConfig('importance','title'),['class'=>'input-sm col-2']) ?>

    <?= $form->field($model, 'begindate')->widget(DatePicker::className(),['dateFormat'=>'yyyy-MM-dd','clientOptions'=>['dafaultDate'=>date('yyyy-mm-dd')]]) ?>

    <?= $form->field($model, 'enddate')->widget(DatePicker::className(),['dateFormat'=>'yyyy-MM-dd']) ?>

    <?= $form->field($model, 'content')->widget('pjkui\kindeditor\KindEditor',['clientOptions'=>['allowFileManager'=>'true','allowUpload'=>'true']])
    //$form->field($model, 'content')->textarea(['rows' => 6]) 
    ?>
    
<!--<?= $form->field($model, 'publishdate')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
