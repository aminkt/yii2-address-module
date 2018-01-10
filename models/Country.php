<?php

namespace saghar\address\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%country}}".
 *
 * @property int $id
 * @property string $name
 * @property double $latitude
 * @property double $longitude
 *
 * @property State[] $states
 */
class Country extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%country}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['latitude', 'longitude'], 'number'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStates()
    {
        return $this->hasMany(State::className(), ['countryId' => 'id']);
    }

    /**
     * Create new country
     *
     * @param array $data <code>
     *      [
     *          'name' => $name,
     *          'latitude' => $latitude,
     *          'longitude' => $longitude
     *      ]
     * </code>
     *
     * @internal  string $name name
     *
     * @internal  double $latitude latitude
     *
     * @internal  double $longitude longitude
     *
     * @return Country|null
     */
    public static function create($data)
    {
        $country = new Country();
        $country->name = isset($data['name']) ? $data['name'] : null;
        $country->latitude = isset($data['latitude']) ? $data['latitude'] : null;
        $country->longitude = isset($data['longitude']) ? $data['longitude'] : null;

        if ($country->save()) {
            \Yii::$app->getSession()->setFlash('success', 'کشور ذخیره شد.');
            return $country;
        } else {
            \Yii::error($country->getErrors());
            \Yii::$app->getSession()->setFlash('error', 'کشور ذخیره نشد.');
            return null;
        }
    }
}
