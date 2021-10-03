<?php
?>

<div class="col-lg-12">
    <h2><?= $model->title ?></h2>
    <p><?= $model->text ?></p>
    <?= yii\helpers\Html::a('подробнее', ['blog/one', 'url'=>$model->url], ['class'=>'brn btn-success']) ?>
</div>
