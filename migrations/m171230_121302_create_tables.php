<?php

use yii\db\Migration;

/**
 * Class m171230_121302_create_tables
 * @author Saghar Mojdehi <saghar.mojdehi@gmail.com>
 */
class m171230_121302_create_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        //creating tables
        $this->createTable('{{%address}}', [
            'id' => $this->primaryKey(),
            'cityId' => $this->integer()->notNull(),
            'address' => $this->text()->notNull(),
            'zipCode' => $this->string(),
            'latitude' => $this->double(),
            'longitude' => $this->double(),
            'updateAt' => $this->dateTime(),
            'createAt' => $this->dateTime(),
        ]);

        $this->createTable('{{%city}}', [
            'id' => $this->primaryKey(),
            'stateId' => $this->integer()->notNull(),
            'name' => $this->string(),
            'latitude' => $this->double(),
            'longitude' => $this->double(),
        ]);

        $this->createTable('{{%state}}', [
            'id' => $this->primaryKey(),
            'countryId' => $this->integer()->notNull(),
            'name' => $this->string(),
            'latitude' => $this->double(),
            'longitude' => $this->double(),
        ]);

        $this->createTable('{{%country}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'latitude' => $this->double(),
            'longitude' => $this->double(),
        ]);

        //adding foreign key to tables
        $this->addForeignKey(
            'address_city_fk',
            '{{%address}}',
            'cityId',
            '{{%city}}',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'city_state_fk',
            '{{%city}}',
            'stateId',
            '{{%state}}',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'state_country_fk',
            '{{%state}}',
            'countryId',
            '{{%country}}',
            'id',
            'CASCADE',
            'CASCADE'
        );

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        //removing foreign keys
        $this->dropForeignKey(
            'address_city_fk',
            '{{%address}}'
        );

        $this->dropForeignKey(
            'city_state_fk',
            '{{%city}}'
        );

        $this->dropForeignKey(
            'state_country_fk',
            '{{%state}}'
        );

        //removing tables
        $this->dropTable('{{%address}}');
        $this->dropTable('{{%city}}');
        $this->dropTable('{{%state}}');
        $this->dropTable('{{%country}}');
    }

}
