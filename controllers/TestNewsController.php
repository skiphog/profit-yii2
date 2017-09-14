<?php

namespace app\controllers;

use yii\web\Controller;

class TestNewsController extends Controller
{
    public $layout = 'app';

    public function actionIndex()
    {
        return $this->render('testNews');
    }
}
