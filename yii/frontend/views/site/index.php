<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <?php foreach ($blogs as $post) :?>
            <div class="col-lg-4">
                <h2><?= $post->title ?></h2>
                <p><?= $post->text ?></p>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
