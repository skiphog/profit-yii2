<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Article;

class NewsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Получение списка "неархивных" новостей за текущую неделю, в разбивке по дням недели и по рубрикам.
     *
     * @return string
     * @throws \yii\base\InvalidParamException
     */
    public function actionNewsRubrics()
    {
        return $this->render('newsByRubrics', [
            'news' => Article::getNewsByRubrics()
        ]);
    }

    /**
     * Списание в архив всех новостей из выбранных рубрик, которые были опубликованы ранее указанной даты.
     */
    public function actionSetArchiveByDate()
    {
        $request = Yii::$app->request;

        Article::updateAll(
            ['active' => false],
            ['and', ['in', 'rubric_id', $request->post('rubrics')], ['<', 'created_at', $request->post('date')]]
        );

        return $this->goBack();
    }
}
