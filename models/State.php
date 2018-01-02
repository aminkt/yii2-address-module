<?php

namespace saghar\address\models;

use Yii;

/**
 * This is the model class for table "tbl_state".
 *
 * @property int $id
 * @property int $countryId
 * @property int $name
 * @property double $latitude
 * @property double $longitude
 *
 * @property City[] $cities
 * @property Country $country
 *
 * @author Saghar Mojdehi <saghar.mojdehi@gmail.com>
 */
class State extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_state';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['countryId'], 'required'],
            [['countryId'], 'integer'],
            [['name'], 'string'],
            [['latitude', 'longitude'], 'number'],
            [['countryId'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['countryId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'countryId' => 'Country ID',
            'name' => 'Name',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCities()
    {
        return $this->hasMany(City::className(), ['stateId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'countryId']);
    }

    /**
     * Create new state
     *
     * @param array $data <code>
     *      [
     *          'name' => $name,
     *          'countryId' => $countryId
     *          'latitude' => $latitude,
     *          'longitude' => $longitude
     *      ]
     * </code>
     *
     * @internal  string $name name
     *
     * @internal  integer $countryId countryId
     *
     * @internal  double $latitude latitude
     *
     * @internal  double $longitude longitude
     *
     * @return State|null
     */
    public static function create($data)
    {
        $state = new State();
        $state->name = isset($data['name']) ? $data['name'] : null;
        $state->countryId = isset($data['countryId']) ? $data['countryId'] : null;
        $state->latitude = isset($data['latitude']) ? $data['latitude'] : null;
        $state->longitude = isset($data['longitude']) ? $data['longitude'] : null;

        if ($state->save()) {
            \Yii::$app->getSession()->setFlash('success', 'استان ذخیره شد.');
            return $state;
        } else {
            \Yii::error($state->getErrors());
            \Yii::$app->getSession()->setFlash('error', 'استان ذخیره نشد.');
            return null;
        }
    }
}
