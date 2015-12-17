<?php
//use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

//AppAsset::register($this);
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
<?php echo $_SERVER['DOCUMENT_ROOT'];?>
    <p class="demo">Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
    <form name="example" method="post" action="">
        <textarea name="content1" class="content1" style="width:700px;height:200px;"></textarea>
           <br />
        <input type="submit" name="button" value="提交内容" /> (提交快捷键: Ctrl + Enter)
   </form>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
<script type="text/javascript">  

jQuery(function($){ 
    KindEditor.ready(function(K) {
        var options = {
                width:'300px',
                height:'50px',
                items: [
                    'code','plainpaste', 'wordpaste', '|','subscript','superscript','|','fontname', 'fontsize','forecolor', '|', 
                    'forecolor', 'hilitecolor', 'bold','italic', 'underline', 'removeformat', '|', 
                    'image', 'multiimage', 'flash', 'media', 'table'],
                themeType:'simple',
                filterMode : true,
                pasteType : 1,
                allowFileManager:true,
                afterBlur: function(){this.sync();}
        };
        //alert(1);
        var editor = K.create('textarea[class="content1"]', options);
        
    });
});
</script>


