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

    public function isRedacted()
    {
        return null !== $this->created_at;
    }
}
