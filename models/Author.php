<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * @property integer $id
 * @property string $name
 */
class Author extends ActiveRecord
{
    public static function tableName()
    {
        return 'Authors';
    }

    public function getNews()
    {
        return $this->hasMany(Article::class, ['author_id', 'id']);
    }
}
