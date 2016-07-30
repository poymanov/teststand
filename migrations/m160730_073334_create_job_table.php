<?php

use yii\db\Migration;

/**
 * Handles the creation for table `job`.
 */
class m160730_073334_create_job_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('job', [
            'id' => $this->primaryKey(),
            'status' => $this->boolean()->notNull()->defaultValue(1),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('job');
        return true;
    }
}
