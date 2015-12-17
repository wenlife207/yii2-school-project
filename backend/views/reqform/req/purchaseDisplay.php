<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Reqform */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Reqforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reqform-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <table class="table">
        <tr>
            <td id="title">title</td>
            <td id="content"><?=$model->title?></td>

        </tr>
        <tr>
            <td id="title">content</td>
            <td id="content"><?=$model->content?></td>
          </tr>
        <tr>
            <td id="title">部门</td>
            <td id="content"><?=$model->userdepart?></td>
        </tr>
    </table>
    <table class="table item">
        <tr>
            <th>id</th>
            <th>名称</th>
            <th>数量</th>
            <th>单价</th>
        </tr>
        <?php
        foreach ($subModel as $key => $value) {
        ?>
        <tr>
            <td><?=$value->id?></td>
            <td><?=$value->name?></td>
            <td><?=$value->amount?></td>
            <td><?=$value->price?></td>
        </tr>
        <?php } ?>
    </table>
    <table class="table">
        
        <?php if (isset($record)) { ?>
        <tr>
            <th>编号</th>
            <th>操作</th>
            <th>结果</th>
            <th>评价</th>
            <th>处理人</th>
            <th>创建时间</th>
        </tr>
        <?php
           $i=1;
           foreach ($record as $key => $value) {
              echo "<tr>";
              echo "<td>".$i++;
              echo "</td><td>".$value->act;
              echo "</td><td>".$value->result;
              echo "</td><td>".$value->note;
              echo "</td><td>".$value->handler;
              echo "</td><td>".date('Y-m-d H:i:s',$value->createtime);
              echo "</td></tr>";
           }
        }
          
        ?>
    </table>
    <p>  
 <!--        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?> -->
        <?php 
        if (isset($handle)&&is_array($handle)) {
           foreach ($handle as $key=> $value) {
              echo Html::a($value['name'],[$value['url'],'id'=>$model->id],['class'=>$value['btn']]);
           }
        }else{

            //echo Html::a($handle['name'],[$handle['url'],'id'=>$model->id],['class'=>'btn btn-primary']);//var_export($handle) 
        }
         ?>
    </p>
    
</div>