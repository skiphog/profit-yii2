<?php

use yii\db\Migration;

/**
 * Handles the creation of table `rubrics`.
 */
class m170917_172413_create_rubrics_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('rubrics', [
            'id'   => $this->primaryKey()->unsigned(),
            'title' => $this->string()->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('rubrics');
    }
}
