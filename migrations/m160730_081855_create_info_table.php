<?php

use yii\db\Migration;

/**
 * Handles the creation for table `info`.
 */
class m160730_081855_create_info_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('info', [
            'id' => $this->primaryKey(),
            'text' => $this->text()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('info');
        return true;
    }
}
