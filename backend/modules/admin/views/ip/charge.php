<?php

use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Charge */

$this->title = '添加缴费信息';
$this->params['breadcrumbs'][] = ['label' => 'ip', 'url' => ['ip/index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="charge-update">

    <h1><?= Html::encode($this->title) ?></h1>

	<div class="charge-form">

	    <?php $form = ActiveForm::begin(); ?>

	    <?= $form->field($model, 'date')->widget(DatePicker::className(),['language'=>'zh-CN','dateFormat'=>'yyyy-MM-dd']); ?>

	    <?= $form->field($model, 'period')->dropDownList(ArrayHelper::map(Yii::$app->params['periodType'],'id','title')) ?>

	    <?php //echo $form->field($model, 'state')->dropDownList(ArrayHelper::map(Yii::$app->params['stateType'],'name','title'))?>

	    <?= $form->field($model, 'note')->textInput(['maxlength' => 100]) ?>

	    <div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>

	    <?php ActiveForm::end(); ?>

	</div>

</div>
