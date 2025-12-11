<?php
declare(strict_types=1);

namespace app\controllers;

use yii\web\Controller;

class HelpController extends Controller
{
    public function actionIndex(): string
    {
        return $this->render('index');
    }

    public function actionPrivatePolicy(): string
    {
        return $this->render('privatePolicy');
    }
}
