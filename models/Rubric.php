<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * @property integer $id
 * @property string $name
 */
class Rubric extends ActiveRecord
{
    public static function tableName()
    {
        return 'Rubrics';
    }

    public function getNews()
    {
        return $this->hasMany(Article::class, ['rubric_id', 'id']);
    }
}
