<?php
/* @var $this yii\web\View */
/* @var $model common\models\notice */
use yii\helpers\Html;
use yii\widgets\DetailView;
use common\config\ConfigParam;

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Notices', 'url' => ['list','category'=>$model->category]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notice-view">
    <div class="page-header">
    <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <ul class="list-inline">
        <li>发布者：<?=$model->publisher?></li>
        <li>发布于：<?=$model->publishdate?></li>
        <li>重要级别：<?=ConfigParam::getConfig('importance','title',$model->importance)?></li>
        <li>结束时间:<?=$model->enddate?></li>
    </ul>
<div class="well">
<?=$model->content?>
<div style="clear:both"></div>
</div>
</div>
