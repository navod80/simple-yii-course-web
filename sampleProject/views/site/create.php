<?php

use yii\helpers\html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <center><h1 >Course Registration</h1></center>
    
    <div class="body-content">
        <?php
            $form = ActiveForm::begin()?>
        <div class="row">
            <div class="form-group">
                <div class  ="col-lg-6">
                    <?= $form->field($course,'name');?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class  ="col-lg-6">
                <?php $items = ['Software Engneering'=>'Software Engneering','IT Engineering'=>'IT Engineering','Network Engneering'=>'Network Engneering','Cyber Securty'=>'Cyber Securty',]; ?>
                    <?= $form->field($course,'course')->dropDownList($items, ['prompt' => 'Select']);?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class  ="col-lg-6">
                    <?= $form->field($course,'amount');?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class  ="col-lg-6">
                <?php $items = ['2'=>'2','3'=>'3','4'=>'4',]; ?>
                    <?= $form->field($course,'period')->dropDownList($items, ['prompt' => 'Select']);?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class  ="col-lg-6">
                    <div class  ="col-lg-4">
                        <?= Html::submitButton('Enroll new student', ['class'=>'btn btn-primary']);?>
                    </div>
                    <div class  ="col-lg-2">
                        <a href=<?php echo yii::$app->homeurl;?> class=" btn btn-primary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>

        <?php ActiveForm::end() ?>
    </div>
</div>
