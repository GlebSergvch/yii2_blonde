<?php


namespace backend\controllers;


use Yii;
use yii\web\Controller;

class RoleController extends Controller
{
    public function actionIndex() {
        return '54545';
    }

    public function actionCreateRole() {
//        $admin = Yii::$app->authManager->createRole('admin');
//        $admin->description = 'Администратор';
//        Yii::$app->authManager->add($admin);
//
//        $content = Yii::$app->authManager->createRole('content');
//        $content->description = 'Контент менеджер';
//        Yii::$app->authManager->add($content);
//
//        $user = Yii::$app->authManager->createRole('user');
//        $user->description = 'Пользователь';
//        Yii::$app->authManager->add($user);
//
//        $banned = Yii::$app->authManager->createRole('banned');
//        $banned->description = 'заблокированный';
//        Yii::$app->authManager->add($banned);

        return '1111';
    }

    public function actionCreatePermission() {
//        $auth = Yii::$app->authManager;
//
//        // add "createPost" permission
//        $permit = $auth->createPermission('canAdmin');
//        $permit->description = 'Вход в админку';
//        $auth->add($permit);

        return '3232';
    }

    public function actionAddPermission() {
        $auth = Yii::$app->authManager;

        // add "createPost" permission
//        $role_admin = $auth->getRole('admin');
//        $role_content = $auth->getRole('content');
//        $permit = $auth->getPermission('canAdmin');
//        $auth->addChild($role_admin, $permit);
//        $auth->addChild($role_content, $permit);

        return '656565656';
    }

    public function actionAppointAdmin() {
        $auth = Yii::$app->authManager;

        $adminRole = $auth->getRole('admin');
        $auth->assign($adminRole, Yii::$app->user->id);

        return '88888';
    }
}