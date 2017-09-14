<?php

namespace app\components;

use yii\base\Widget;

class NewsWidget extends Widget
{
    /**
     * Размер массива по умолчанию
     * @var int
     */
    public $size = 10;

    public function run()
    {
        return $this->render('news', [
            'news' => $this->getNews($this->size)
        ]);
    }

    /**
     * Возращает фейковый массив c новостями
     * @param int $size
     * @return array
     */
    protected function getNews(int $size): array
    {
        return array_map(function ($v) {
            return ['id' => $v, 'title' => 'Заголовок #' . $v, 'content' => 'Текст новости #' . $v];
        }, range(1, $size));
    }
}
