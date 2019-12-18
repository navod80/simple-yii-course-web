<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About Us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>
    <div class="form-group">
        <a class="btn btn-lg btn-success" href="https://www.google.com/">introduction to google</a>
    </div>
    <p>path of user directory - <code><?= __FILE__ ?></code></p>
</div>
