<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\BlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blogs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Blog', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {check}',
                'buttons' => [
//                    'update' => function($url, $model, $key) {
//                        return Html::a('asdas', $url);
//                    },
                    'check' => function($url, $model, $key) {
                        return Html::a('<i class="fa fa-check" aria-hidden="true"></i>', $url);
                    },
                ],
                'visibleButtons' => [
                        'check' => function($model, $key, $index) {
                            return $model->status_id === 1;
                        }
                ]
            ],
            'id',
            'title',
//            'text:ntext',
            ['attribute' => 'url', 'format'=>'text', 'headerOptions' => ['class' => 'url-text']],
            ['attribute' => 'status_id', 'filter' => \common\models\Blog::STATUS_LIST, 'value' => 'statusName'],
            'sort',
            'date_create',
            'date_update',
            ['attribute' => 'tags', 'value' => 'tagsAsString']
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
