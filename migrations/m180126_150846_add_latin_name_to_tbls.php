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
        $this->update("{{%country}}", [
            'latin_name' => 'Iran'
        ], [
            'name' => 'ایران'
        ]);

        $this->addColumn("{{%state}}", 'latin_name', $this->string()->after('name'));
        $this->update("{{%state}}", [
            'latin_name' => 'Guilan'
        ], [
            'name' => 'گیلان'
        ]);

        $this->addColumn("{{%city}}", 'latin_name', $this->string()->after('name'));
        $this->update("{{%city}}", [
            'latin_name' => 'Astara'
        ], [
            'id' => 267
        ]);
        $this->update("{{%city}}", [
            'latin_name' => 'Astaneh-ye Ashrafiyeh'
        ], [
            'id' => 268
        ]);
        $this->update("{{%city}}", [
            'latin_name' => 'Amlash'
        ], [
            'id' => 269
        ]);
        $this->update("{{%city}}", [
            'latin_name' => 'Bandar-e Anzali'
        ], [
            'id' => 270
        ]);
        $this->update("{{%city}}", [
            'latin_name' => 'Rasht'
        ], [
            'id' => 271
        ]);
        $this->update("{{%city}}", [
            'latin_name' => 'Rezvanshahr'
        ], [
            'id' => 272
        ]);
        $this->update("{{%city}}", [
            'latin_name' => 'Rudbar'
        ], [
            'id' => 273
        ]);
        $this->update("{{%city}}", [
            'latin_name' => 'Rudsar'
        ], [
            'id' => 274
        ]);
        $this->update("{{%city}}", [
            'latin_name' => 'Siahkal'
        ], [
            'id' => 275
        ]);
        $this->update("{{%city}}", [
            'latin_name' => 'Shaft'
        ], [
            'id' => 276
        ]);
        $this->update("{{%city}}", [
            'latin_name' => "Sowme'eh Sara"
        ], [
            'id' => 277
        ]);
        $this->update("{{%city}}", [
            'latin_name' => 'Talesh'
        ], [
            'id' => 278
        ]);
        $this->update("{{%city}}", [
            'latin_name' => 'Fuman'
        ], [
            'id' => 279
        ]);
        $this->update("{{%city}}", [
            'latin_name' => 'Lahijan'
        ], [
            'id' => 280
        ]);
        $this->update("{{%city}}", [
            'latin_name' => 'Langarud'
        ], [
            'id' => 281
        ]);
        $this->update("{{%city}}", [
            'latin_name' => 'Masal'
        ], [
            'id' => 282
        ]);
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
