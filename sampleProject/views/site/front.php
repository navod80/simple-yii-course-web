<?php

use yii\helpers\html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
<?php if(yii::$app->session->hasFlash('message')):?>
    <div class="alert alert-dismissible alert-success">
    <button class="close" type="button" data-dismiss="alert">&times;</button>
    <?php echo yii::$app->session->getFlash('message');?>
    </div>
<?php endif;?>
    <div class="jumbotron">
        <h1 style="color: #337ab7">Welcome!</h1>

        <p class="lead" style="color: #FF0000">New Students Course Registration</p>
        
        <span><?= Html::a('Please Login', ['/site/login'],['class' => 'btn btn-primary']) ?></span>
        <br></br>
        <!-- <p><B> Not a member ? </B><span><?= Html::a('Register') ?></span></P> -->
    </div>
    
    <!-- <div class="row">
        <span><?= Html::a('Enroll', ['/site/create'],['class' => 'btn btn-primary']) ?></span>
    </div> -->
    <div class="body-content">
        <div></div>
        <div></div>
        
</div>
