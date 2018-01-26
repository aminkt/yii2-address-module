<?php

namespace saghar\address\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%city}}".
 *
 * @property int       $id
 * @property int       $stateId
 * @property string    $name
 * @property string    $latinName
 * @property double    $latitude
 * @property double    $longitude
 *
 * @property Address[] $addresses
 * @property State     $state
 * @property string    $stateName
 */
class City extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%city}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stateId'], 'required'],
            [['stateId'], 'integer'],
            [['latitude', 'longitude'], 'number'],
            [['name', 'latinName'], 'string', 'max' => 255],
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

    /**
     * Return state name.
     *
     * @return string
     *
     * @author Amin Keshavarz <amin@keshavarz.pro>
     */
    public function getStateName()
    {
        return $this->state->name;
    }
}
