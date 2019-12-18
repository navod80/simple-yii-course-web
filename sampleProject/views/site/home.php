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
        
        <span><?= Html::a('Enroll as a new student', ['/site/create'],['class' => 'btn btn-primary']) ?></span>
    </div>
    
    <!-- <div class="row">
        <span><?= Html::a('Enroll', ['/site/create'],['class' => 'btn btn-primary']) ?></span>
    </div> -->
    <div class="body-content">
    
        <div class="row">
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Student ID</th>
            <th scope="col">Student Name</th>
            <th scope="col">Course Name</th>
            <th scope="col">Course Amount (Rs.)</th>
            <th scope="col">Course period</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($course) > 0): ?>
                <?php foreach($course as $course): ?>
            <tr class="table-active">
            <th scope="row"><?php echo $course->id;?></th>
            <td><?php echo $course->name;?></td>
            <td><?php echo $course->course;?></td>
            <td><?php echo $course->amount;?></td>
            <td><?php echo $course->period;?></td>
            <td>
                <span><?=Html::a('View',['view','id' => $course->id],['class' => 'label label-primary']) ?></span>
                <span><?=Html::a('Update',['update','id' => $course->id],['class' => 'label label-success']) ?></span>
                <span><?=Html::a('Delete',['delete','id' => $course->id],['class' => 'label label-danger']) ?></span>
            </td>
            </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td>No Records Found</td>
                </tr>
            <?php endif; ?>
        </tbody>
        </table>
        </div>

    </div>
</div>
