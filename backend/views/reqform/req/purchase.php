<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model common\models\Reqform */

$this->title = '新建购买申请';
$this->params['breadcrumbs'][] = ['label' => 'Reqforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reqform-create">

    <h1><?=Html::encode($this->title) ?></h1>

   <?php $form = ActiveForm::begin();?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'type')->textInput() ?>
    <?= $form->field($model, 'userdepart')->dropDownList(ArrayHelper::map(Yii::$app->params['duty'],'name','title')) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>
    

    <hr />
    <?php 

    // $index = is_null($subModel)?count($subModel):2;
    // 
     //echo is_array($subModel);
     // exit();

     if(is_array($subModel))
     {
		for ($i=0; $i <count($subModel); $i++) { 
			//echo $subModel[$i]->formName();
			//echo $form->field($subModel[$i],"id")->hiddenInput(['name'=>$subModel[$i]->formName()."[$i][id]"]);
	     	echo $form->field($subModel[$i],"name")->textInput(['class'=>'input-large','name'=>$subModel[$i]->formName()."[$i][name]"]);
	     	echo $form->field($subModel[$i],"amount")->textInput(['class'=>'input-large','name'=>$subModel[$i]->formName()."[$i][amount]"]);
     	}

     }else{
     	for ($i=0; $i <2; $i++) { 
	     	//echo $subModel->tableName();
	     	echo $form->field($subModel,"[{$i}]name")->textInput(['class'=>'input-large']);
	     	echo $form->field($subModel,"[{$i}]amount")->textInput(['class'=>'input-large']);
     	}
     }

    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>