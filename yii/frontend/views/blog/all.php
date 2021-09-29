<?php
/* @var $blogs \common\models\Blog */
?>

<div class="body-content">

    <div class="row">
        <?php foreach ($blogs as $post) :?>
            <div class="col-lg-4">
                <h2><?= $post->title ?></h2>
                <p><?= $post->text ?></p>
                <?= yii\helpers\Html::a('подробнее', ['blog/one', 'url'=>$post->url]) ?>
            </div>
        <?php endforeach; ?>
    </div>

</div>
