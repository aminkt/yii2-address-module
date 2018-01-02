<?php

namespace saghar\address\models;

use Yii;

/**
 * This is the model class for table "tbl_city".
 *
 * @property int $id
 * @property int $stateId
 * @property int $name
 * @property double $latitude
 * @property double $longitude
 *
 * @property Address[] $addresses
 * @property State $state
 *
 * @author Saghar Mojdehi <saghar.mojdehi@gmail.com>
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stateId'], 'required'],
            [['stateId'], 'integer'],
            [['name'], 'string'],
            [['latitude', 'longitude'], 'number'],
            [['stateId'], 'exist', 'skipOnError' => true, 'targetClass' => State::className(), 'targetAttribute' => ['stateId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'stateId' => 'State ID',
            'name' => 'Name',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddresses()
    {
        return $this->hasMany(Address::className(), ['cityId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState()
    {
        return $this->hasOne(State::className(), ['id' => 'stateId']);
    }

    /**
     * Create new city
     *
     * @param array $data <code>
     *      [
     *          'name' => $name,
     *          'stateId' => $stateId
     *          'latitude' => $latitude,
     *          'longitude' => $longitude
     *      ]
     * </code>
     *
     * @internal  string $name name
     *
     * @internal  integer $stateId stateId
     *
     * @internal  double $latitude latitude
     *
     * @internal  double $longitude longitude
     *
     * @return City|null
     */
    public static function create($data)
    {
        $city = new City();
        $city->name = isset($data['name']) ? $data['name'] : null;
        $city->stateId = isset($data['stateId']) ? $data['stateId'] : null;
        $city->latitude = isset($data['latitude']) ? $data['latitude'] : null;
        $city->longitude = isset($data['longitude']) ? $data['longitude'] : null;

        if ($city->save()) {
            \Yii::$app->getSession()->setFlash('success', 'شهر ذخیره شد.');
            return $city;
        } else {
            \Yii::error($city->getErrors());
            \Yii::$app->getSession()->setFlash('error', 'شهر ذخیره نشد.');
            return null;
        }
    }
}
