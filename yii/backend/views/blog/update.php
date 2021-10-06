<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Blog */

$this->title = 'Update Blog: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="blog-update">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <div class="well">
        <?php foreach ($model->blogTag as $exempTag): ?>
        <?= $exempTag->tag->name ?><br>
        <?php endforeach ?>
    </div>

    или

    <div class="well">
        <?php foreach ($model->tags as $exempTag): ?>
            <?= $exempTag->name ?><br>
        <?php endforeach ?>
    </div>

    <pre><?php print_r($model->getTags()->asArray()->all()); ?></pre>
    <pre><?php print_r($arr = ArrayHelper::map($model->tags, 'id', 'id')); ?></pre>
    <pre><?php print_r($arr = ArrayHelper::map($model->tags_array, 'id', 'id')); ?></pre>

</div>
