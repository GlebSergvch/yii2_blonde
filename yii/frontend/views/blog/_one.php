<?php
?>

<div class="col-lg-12">
    <h2><?= $model->title ?></h2>
    <span class="badge"><?= $model->author->username ?></span>
    <span class="badge"><?= $model->author->email ?></span>
    <p><?= $model->text ?></p>
    <?= yii\helpers\Html::a('подробнее', ['blog/one', 'url'=>$model->url], ['class'=>'brn btn-success']) ?>
</div>
