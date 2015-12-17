<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Create User';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <h1>已为用户<?=$model->username?>创建基本用户信息，审核通过，如需修改用户基本信息请点击如下链接：</h1>
    <?=Html::a('添加基本信息',['/userinfo/update','id'=>$model->id])?>

    

</div>
