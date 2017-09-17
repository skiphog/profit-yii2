<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m170917_172754_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('news', [
            'id'         => $this->primaryKey()->unsigned(),
            'title'      => $this->string()->notNull(),
            'content'    => $this->text()->notNull(),
            'author_id'  => $this->integer()->unsigned(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime()
        ]);

        $this->createIndex(
            'idx-news-author_id',
            'news',
            'author_id'
        );

        $this->addForeignKey(
            'fk-news-author_id',
            'news',
            'author_id',
            'authors',
            'id'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey(
            'fk-news-author_id',
            'news'
        );

        $this->dropIndex(
            'idx-news-author_id',
            'news'
        );

        $this->dropTable('news');
    }
}
