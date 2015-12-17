<?php
/**
*create at 2015.8.3 By Wenlin.Ma
*/
use yii\widgets\ListView;
use yii\widgets\DetailView;
use yii\helpers\Html;
use common\models\notice;

?>
<div class="index">
<h1>view list of this catogry</h1>
<?=ListView::widget([
	'dataProvider'=>$dataProvider,
	'options'=>['tag'=>'table','class'=>'tabel table-bordered'],
	'summary'=>'',
	'itemOptions'=>['tag'=>'tr'],
	'itemView'=>function($model,$key,$index,$widget){
		return '<td>'.Html::a(Html::encode(mb_substr($model->title,0,20)),['notice/detail','id'=>$model->id]).'</td><td>'.$model->publisher.'</td><td>'.$model->publishdate.'</td>';
	}
	]);
?>
</div>
