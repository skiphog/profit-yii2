<?php

use yii\db\Migration;

/**
 * Handles the creation of table `authors`.
 */
class m170917_172412_create_authors_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('authors', [
            'id'   => $this->primaryKey()->unsigned(),
            'name' => $this->string()->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('authors');
    }
}
