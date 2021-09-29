<?php


namespace frontend\controllers;

use common\models\Blog;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Blog controller
 */
class BlogController extends Controller
{
    public function actionIndex() {
        $blogs = Blog::find()->andWhere(['status_id' => 1 ])->orderBy('sort')->all();
        return $this->render('all', ['blogs'=>$blogs]);
    }

    public function actionOne($url) {
        if ($blog = Blog::find()->andWhere(['url' => $url])->one()) {
            return $this->render('one', ['blog'=>$blog]);
        }
        throw new NotFoundHttpException('такого блога нету');
    }
}