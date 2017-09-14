<?php

namespace app\components;

use yii\base\Widget;

class NewsWidget extends Widget
{
    const SIZE = 10;

    public $size;

    public function init()
    {
        parent::init();
        if (null === $this->size) {
            $this->size = self::SIZE;
        }
    }

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
