<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Tabs;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\IpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'IP-MAC管理界面';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ip-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <H5><?=$loginMsg?></H5>
    <p>
        <?= Html::a('新建IP绑定', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
   
   <?php
        $splitArray = array();
        foreach ($ipArray as $key => $value) {
            list($a,$b,$c,$d) = explode('.',$key);
            $splitArray[$c][$key] = $value;  
        }

        $tabItem = array();
        foreach ($splitArray as $key => $split) {
            $tabItem[] = [
                'label'=>'IP号段'.$key,
                'content'=>$this->render('partial/ipdisplay',['model'=>$split]),
                'active'=>($key==0?true:false),
            ];
        }
        $tabItem[] = [
            'label'=>'职工计费',
            'content'=>$this->render('partial/ipdisplay',['model'=>$ipChargein]),
        ];
        $tabItem[] = [
            'label'=>'非职工计费',
            'content'=>$this->render('partial/chargedisplay',['model'=>$ipChargeout]),
        ];

        echo Tabs::widget(
            [
            'items'=>$tabItem,
            ]
        );
    ?>
</div>
