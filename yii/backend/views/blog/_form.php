<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;

/* @var $this yii\web\View */
/* @var $model common\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin([
            'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <div class="row">
        <?= $form->field($model, 'title', ['options'=>['class'=>'col-xs-6']])->textInput(['maxlength' => true]) ?>

        <?=
            $form->field($model, 'file', ['options'=>['class'=>'col-xs-6']])->widget(FileInput::classname(), [
                'options' => ['accept' => 'image/*'],
                'pluginOptions' => [
                    'showCaption' => false,
                    'showRemove' => false,
                    'showUpload' => false,
                    'browseClass' => 'btn btn-primary btn-block',
                    'browseIcon' => '<i class="fas fa-camera"></i> ',
                    'browseLabel' =>  'Выбрать фото'
                ],
            ]);
        ?>

        <?=
        $form->field($model, 'text', ['options'=>['class'=>'col-xs-6']])->widget(Widget::className(), [
            'settings' => [
                'lang' => 'ru',
                'minHeight' => 200,
                'imageUpload' => \yii\helpers\Url::to(['/site/save-redactor-img', 'sub' => 'blog']),
                'plugins' => [
                    'clips',
                    'fullscreen',
                ],
            ],
        ]);
        ?>

        <?= $form->field($model, 'url', ['options'=>['class'=>'col-xs-6']])->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'status_id', ['options'=>['class'=>'col-xs-6']])->dropDownList(\common\models\Blog::STATUS_LIST) ?>

        <?= $form->field($model, 'sort', ['options'=>['class'=>'col-xs-6']])->textInput() ?>

        <?= $form->field($model, 'text', ['options'=>['class'=>'col-xs-6']])->textarea(['rows' => 6]) ?>

        <?=
            $form->field($model, 'tags_array', ['options'=>['class'=>'col-xs-6']])->widget(\kartik\select2\Select2::className(), [
                'data' => \yii\helpers\ArrayHelper::map(\common\models\Tag::find()->all(), 'id', 'name'),
                'language' => 'ru',
                'options' => ['placeholder' => 'Выбрать tag ...', 'multiple' => true],
                'pluginOptions' => [
                    'allowClear' => true,
                    'tags' => true,
                    'maximumInputLength' => 10
                ],
            ]);
        ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <?=
    FileInput::widget([
        'name' => 'ImageManager[attachment]',
        'options'=>[
            'multiple'=>true
        ],
        'pluginOptions' => [
            'uploadUrl' => Url::to(['/site/save-img']),
            'uploadExtraData' => [
                'ImageManager[class]' => $model->formName(),
                'ImageManager[item_id]' => $model->id
            ],
            'maxFileCount' => 10
        ]
    ]);
    ?>

</div>
