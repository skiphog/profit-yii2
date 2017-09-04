<?php

namespace app\components;

use Yii;
use yii\base\ActionFilter;
use yii\web\UnauthorizedHttpException;

class Verify extends ActionFilter
{

    public function beforeAction($action)
    {
        if (!$this->checkVerify()) {
            throw new UnauthorizedHttpException('Unauthorized.');
        }

        return parent::beforeAction($action);
    }


    private function checkVerify()
    {
        $headers = Yii::$app->request->headers;

        return $headers->get('X-UserName') === 'admin'
            &&
            $headers->get('X-Password') === hash('gost', '123456');
    }
}
