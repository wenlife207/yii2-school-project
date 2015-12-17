<?php
/* @var $this yii\web\View */
use common\config\ConfigParam;
use yii\widgets\ListView;
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>
<div class="site-index">

   <!--  <div class="jumbotron">
        <img src="/upload/image/20150702/20150702040457_11708.jpg" width="700" height="500" alt="" />   
    </div> -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
               <img src="/upload/image/20150702/20150702040457_11708.jpg" width="600" height="500" alt="" />   
              <div class="carousel-caption">
                我家黑猫最可爱
              </div>
            </div>
            <div class="item">
               <img src="/upload/image/20150702/20150702040457_11708.jpg" width="600" height="500" alt="" />   
              <div class="carousel-caption">
                ...
              </div>
            </div>
           <div class="item">
               <img src="/upload/image/20150702/20150702040457_11708.jpg" width="600" height="500" alt="" />   
              <div class="carousel-caption">
                ...
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
  </a>
    </div>

    <div class="body-content">

        <div class="row">   
              <?php
                  foreach ($notice as $key => $value) 
                {
              ?>
              <div class="col-lg-4">
                <h5><span class="glyphicon glyphicon-bell"></span><?=$value['title']?><?=Html::a('more>>',['notice/list','category'=>$key],['class'=>'pull-right'])?></h5>
                
                <hr class="hr" />
                <?=Listview::widget([
                      'dataProvider'=>$value['dataProvider'],
                      'options'=>['tag'=>'ul'],
                      'summary'=>'',
                      'itemOptions'=>['tag'=>'li'],
                      'itemView'=>function($model,$key,$index,$widget){
                         return Html::a(Html::encode(mb_substr($model->title,0,15)),['notice/detail','id'=>$model->id],['title'=>$model->title]);
                      }
                    ]);
                ?>
              </div>
             <?php }?>
        </div>
    </div>
</div>
