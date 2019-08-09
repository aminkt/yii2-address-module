<?php

use yii\db\Migration;

/**
 * Class m180408_103130_add_mazandaran_cities_latin_names
 */
class m180408_103130_add_mazandaran_cities_latin_names extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update('{{%state}}', ['latinName' => 'Mazandaran'], ['name'=>'مازندران']);

        $this->update('{{%city}}', ['latinName' => 'Amol', 'name'=>'آمل'], ['name'=>' آمل']);
        $this->update('{{%city}}', ['latinName' => 'Babol', 'name'=>'بابل'], ['name'=>' بابل']);
        $this->update('{{%city}}', ['latinName' => 'Babolsar', 'name'=>'بابلسر'], ['name'=>' بابلسر']);
        $this->update('{{%city}}', ['latinName' => 'Behshahr', 'name'=>'بهشهر'], ['name'=>' بهشهر']);
        $this->update('{{%city}}', ['latinName' => 'Tonekabon', 'name'=>'تنکابن'], ['name'=>' تنکابن']);
        $this->update('{{%city}}', ['latinName' => 'Juybar', 'name'=>'جویبار'], ['name'=>' جویبار']);
        $this->update('{{%city}}', ['latinName' => 'Chalus', 'name'=>'چالوس'], ['name'=>' چالوس']);
        $this->update('{{%city}}', ['latinName' => 'Ramsar', 'name'=>'رامسر'], ['name'=>' رامسر']);
        $this->update('{{%city}}', ['latinName' => 'Sari', 'name'=>'ساری'], ['name'=>' ساری']);
        $this->update('{{%city}}', ['latinName' => 'Savadkuh', 'name'=>'سوادکوه'], ['name'=>' سوادکوه']);
        $this->update('{{%city}}', ['latinName' => 'Qaem Shahr', 'name'=>'قائم شهر'], ['name'=>' قائم شهر']);
        $this->update('{{%city}}', ['latinName' => 'Galugah', 'name'=>'گلوگاه'], ['name'=>' گلوگاه']);
        $this->update('{{%city}}', ['latinName' => 'Mahmudabad', 'name'=>'محمود آباد'], ['name'=>' محمود آباد']);
        $this->update('{{%city}}', ['latinName' => 'Neka', 'name'=>'نکا'], ['name'=>' نکا']);
        $this->update('{{%city}}', ['latinName' => 'Noor', 'name'=>'نور'], ['name'=>' نور']);
        $this->update('{{%city}}', ['latinName' => 'Nowshahr', 'name'=>'نوشهر'], ['name'=>' نوشهر']);
        $this->update('{{%city}}', ['latinName' => 'Fereydunkenar', 'name'=>'فریدونکنار'], ['name'=>' فریدونکنار']);
        }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180408_103130_add_mazandaran_cities_latin_names cannot be reverted.\n";

        return false;
    }

}
