<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
?> 

 <table class="table table-bordered">
        <tr><th>编号</th><th>IP地址(switch)</th><th>MAC地址(switch)</th><th>用户</th><th>类型</th><th>设备</th><th>备注</th><th colspan=2>操作</th></tr>
        <?php
            $count = 0;
            foreach ($model as $key => $value) {
                $count++;
                $value = is_object($value)?$value->toArray():$value;
                echo '<tr>';
                echo "<td>$count</td>";

                $userType = ArrayHelper::map(Yii::$app->params['userType'],'id','title');
                $deviceType = ArrayHelper::map(Yii::$app->params['deviceType'],'id','title');
         
                if (is_array($value)) {
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
                    echo ArrayHelper::getValue($deviceType,$value['device']);
                    echo "</td><td>";
                    echo $value['note'];
                    echo "</td>";    
                    echo "<td>";
                    echo Html::a('修改',['update','ip'=>$value['ip']],['class'=>'link']);
                    echo "</td>";
                    echo "<td>";
                    echo Html::a('删除',['delete','ip'=>$value['ip']],['class'=>'link','onClick'=>'return confirm("确定要删除IP:'.$value['ip'].'吗?")']);
                    echo "</td>";
                }else{
                    echo "<td>";
                    echo $key;
                    echo "</td>";
                    echo "<td>";
                    echo $value;
                    echo "</td>";
                    echo "<td colspan=4>数据库没有信息</td>";
                    echo "<td>";
                    echo Html::a('存入',['add','ip'=>$key,'mac'=>$value],['class'=>'link','target'=>'_blank']);
                    echo "</td>";
                    echo "<td>";
                    echo Html::a('删除',['delete','ip'=>$key],['class'=>'link','onClick'=>'return confirm("确定要删除IP:'.$key.'吗?")']);
                    echo "</td>";
                }                  
                echo "</tr>";
            }
        ?>
   </table>