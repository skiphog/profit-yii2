<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $author_id
 * @property integer $rubric_id
 * @property boolean $active
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Author $author
 * @property Rubric $rubric
 */
class Article extends ActiveRecord
{
    public static function tableName()
    {
        return 'news';
    }

    public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['id' => 'author_id']);
    }

    public function getRubric()
    {
        return $this->hasOne(Rubric::className(), ['id' => 'rubric_id']);
    }

    /**
     * Признак отредактированности статьи
     *
     * @return bool
     */
    public function isRedacted(): bool
    {
        return null !== $this->created_at;
    }

    /**
     * Возвращает все активные записи за текущую неделю в виде массива
     * [ День недели => [
     *      [Заголовок рубрики => [Новость],[Новость],...],
     *      [Заголовок рубрики => [Новость],[Новость],...],
     *      [Заголовок рубрики => [Новость],[Новость],...],
     *
     *   ],
     *   День недели => [
     *      [Заголовок рубрики => [Новость],[Новость],...],
     *      [Заголовок рубрики => [Новость],[Новость],...],
     *      [Заголовок рубрики => [Новость],[Новость],...],
     *   ],
     *   ...
     * ]
     *
     * @return array
     */
    public static function getNewsByRubrics()
    {

        /** @var Article[] $articles */
        $articles = self::find()->with(['author', 'rubric'])
            ->where(['active' => true])
            ->andWhere('year(created_at) = year(now()) and week(created_at, 1) = week(now(), 1)')
            ->orderBy(['created_at' => SORT_DESC])
            ->all();

        $tmp = [];

        foreach ($articles as $article) {
            $tmp[(new \DateTime($article->created_at))->format('l')][$article->rubric->title][] = $article;
        }

        return $tmp;
    }
}
