<?php

use yii\db\Migration;

/**
 * Class m180126_040846_add_latin_name_to_tbls
 */
class m180126_150846_add_latin_name_to_tbls extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn("{{%country}}", 'latin_name', $this->string()->after('name'));
        $this->addColumn("{{%state}}", 'latin_name', $this->string()->after('name'));
        $this->addColumn("{{%city}}", 'latin_name', $this->string()->after('name'));
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn("{{%city}}", 'latin_name');
        $this->dropColumn("{{%state}}", 'latin_name');
        $this->dropColumn("{{%country}}", 'latin_name');
    }
}
