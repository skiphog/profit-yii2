<?php

namespace app\controllers;

use yii\web\Controller;
use app\components\Verify;

class TestVerifyController extends Controller
{

    public function behaviors()
    {
        return [
            'class' => Verify::class,
        ];
    }

    public function actionIndex()
    {
        return $this->asJson([
            'test' => 'ok'
        ]);
    }
}
