<?php

use yii\helpers\html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <center><h1 >View Student Course Details</h1></center>
    
    <div class="body-content">
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
           <B>Student Name</B>: <?php echo $course -> name?>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <B>Course Name</B>: <?php echo $course -> course?> 
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <B>Course Amount</B>: <?php echo $course -> amount?>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <B>Course Period</B>: <?php echo $course -> period?>
        </li>
        </ul>

        <div class="row">
            <a href=<?php echo yii::$app->homeurl;?> class=" btn btn-primary">Go Back</a>
        </div>
    </div>
</div>
