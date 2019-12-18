<?php

use yii\helpers\html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <center><h1 >Admin Registration</h1></center>
    
    <div class="body-content">
        <?php
            $form = ActiveForm::begin()?>
        <div class="row">
            <div class="form-group">
                <div class  ="col-lg-6">
                    <?= $form->field($login,'username');?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class  ="col-lg-6">
                    <?= $form->field($login,'password');?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class  ="col-lg-6">
                    <div class  ="col-lg-4">
                        <?= Html::submitButton('Register', ['class'=>'btn btn-primary']);?>
                    </div>
                </div>
            </div>
        </div>

        <?php ActiveForm::end() ?>
    </div>
</div>
