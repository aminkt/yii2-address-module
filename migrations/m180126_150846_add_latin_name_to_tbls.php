<?php

use yii\db\Migration;

/**
 * Class m180126_040846_add_latinName_to_tbls
 */
class m180126_150846_add_latin_name_to_tbls extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn("{{%country}}", 'latinName', $this->string()->after('name'));
        $this->update("{{%country}}", [
            'latinName' => 'Iran'
        ], [
            'name' => 'ایران'
        ]);

        $this->addColumn("{{%state}}", 'latinName', $this->string()->after('name'));
        $this->update("{{%state}}", [
            'latinName' => 'Guilan'
        ], [
            'name' => 'گیلان'
        ]);

        $this->addColumn("{{%city}}", 'latinName', $this->string()->after('name'));
        $this->update("{{%city}}", [
            'latinName' => 'Astara'
        ], [
            'id' => 267
        ]);
        $this->update("{{%city}}", [
            'latinName' => 'Astaneh-ye Ashrafiyeh'
        ], [
            'id' => 268
        ]);
        $this->update("{{%city}}", [
            'latinName' => 'Amlash'
        ], [
            'id' => 269
        ]);
        $this->update("{{%city}}", [
            'latinName' => 'Bandar-e Anzali'
        ], [
            'id' => 270
        ]);
        $this->update("{{%city}}", [
            'latinName' => 'Rasht'
        ], [
            'id' => 271
        ]);
        $this->update("{{%city}}", [
            'latinName' => 'Rezvanshahr'
        ], [
            'id' => 272
        ]);
        $this->update("{{%city}}", [
            'latinName' => 'Rudbar'
        ], [
            'id' => 273
        ]);
        $this->update("{{%city}}", [
            'latinName' => 'Rudsar'
        ], [
            'id' => 274
        ]);
        $this->update("{{%city}}", [
            'latinName' => 'Siahkal'
        ], [
            'id' => 275
        ]);
        $this->update("{{%city}}", [
            'latinName' => 'Shaft'
        ], [
            'id' => 276
        ]);
        $this->update("{{%city}}", [
            'latinName' => "Sowme'eh Sara"
        ], [
            'id' => 277
        ]);
        $this->update("{{%city}}", [
            'latinName' => 'Talesh'
        ], [
            'id' => 278
        ]);
        $this->update("{{%city}}", [
            'latinName' => 'Fuman'
        ], [
            'id' => 279
        ]);
        $this->update("{{%city}}", [
            'latinName' => 'Lahijan'
        ], [
            'id' => 280
        ]);
        $this->update("{{%city}}", [
            'latinName' => 'Langarud'
        ], [
            'id' => 281
        ]);
        $this->update("{{%city}}", [
            'latinName' => 'Masal'
        ], [
            'id' => 282
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn("{{%city}}", 'latinName');
        $this->dropColumn("{{%state}}", 'latinName');
        $this->dropColumn("{{%country}}", 'latinName');
    }
}
