<?php
use yii\helpers\Html;
use common\config\ConfigParam;
?>
<?=$this->render('req/purchaseDisplay',['model'=>$model,'subModel'=>$subModel])?>
<hr>
<?=Html::beginForm()?>
<div id="form-group">
<label for="" id="control-label">意见</label>
<?=Html::textInput('msg',null,['class'=>'input-large'])?>
</div>
<div id="form-group">
<label for="" id="control-label">指定办理人</label>
<?=Html::dropdownlist('handle',null,ConfigParam::getConfig('duty','title'))?>

<?=Html::submitButton('submit',['class'=>'btn btn-primary'])?>
<?=Html::a('否决',['audit','id'=>$model->id,'value'=>'undo'],['class'=>'btn btn-primary']) ?>
</div>
<?=Html::endForm()?>