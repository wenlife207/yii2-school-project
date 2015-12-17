<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
?> 
<table class="table table-bordered">
    <tr><th>编号</th><th>IP地址(switch)</th><th>MAC地址(switch)</th><th>用户</th><th>用户类型</th><th>缴费日期</th><th>缴费时长</th><th>计时状态</th><th>网络状态</th><th colspan=2>操作</th></tr>
    <?php
        $userType = ArrayHelper::map(Yii::$app->params['userType'],'id','title');
        $periodType = ArrayHelper::map(Yii::$app->params['periodType'],'id','title');
        $stateType = ArrayHelper::map(Yii::$app->params['stateType'],'name','title');
        $stateCss = ArrayHelper::map(Yii::$app->params['stateType'],'name','css');
        $periodDataType = ArrayHelper::map(Yii::$app->params['periodType'],'id','data');
        $count = 0;
        foreach ($model as $key => $value) {
            $chargeState = null;
            if (!empty($value['charge'])) {
                $endDate = strtotime($periodDataType[$value['charge']['period']],strtotime($value['charge']['date']));
                $chargeState = $endDate>time()?'state_normal':'state_out';
                //$chargeState = strtotime($periodDataType[$value['charge']['period']],$value['charge']['date']);
            }

            echo '<tr>';
            $count++;
            echo "<td>$count</td>";
            echo "<td>";
            echo $value['ip'];
            echo "</td>";
            echo "<td>";
            echo $value['mac'];
            echo "</td>";
            echo "<td>";
            echo $value['name'];
            echo "</td><td>";
            echo ArrayHelper::getValue($userType,$value['type']);
            echo "</td><td>";
            echo $value['charge']['date'];
           //cho "</td><td>";
           //cho date('y-m-d',$endDate);
            echo "</td><td>";
            echo ArrayHelper::getValue($periodType,$value['charge']['period']);
            echo "</td><td class='".ArrayHelper::getValue($stateCss,$chargeState)."'>"; 
            echo ArrayHelper::getValue($stateType,$chargeState);
            echo "</td><td class='".ArrayHelper::getValue($stateCss,$value['charge']['state'])."'>"; 
            echo ArrayHelper::getValue($stateType,$value['charge']['state']); 
            echo "</td><td>";
            echo Html::a('缴费',['charge','ip'=>$value['ip']],['class'=>'link']);
            echo "</td><td>";
            echo Html::a('断网',['disconnect','ip'=>$value['ip']],['class'=>'link']);
            echo "</td>";
            echo "</tr>";
        }
    ?>
</table> 