<?php

namespace app\components;

use yii\base\Widget;
use app\models\Article;

class ArticleWidget extends Widget
{
    public function run()
    {
        $news = Article::find()->with('author')->orderBy(['created_at' => SORT_DESC])->limit(5)->all();

        return $this->render('articles', compact('news'));
    }
}
