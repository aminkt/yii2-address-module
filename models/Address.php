<?php

namespace saghar\address\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "tbl_address".
 *
 * @property int $id
 * @property int $cityId
 * @property string $address
 * @property string $zipCode
 * @property double $latitude
 * @property double $longitude
 * @property string $updateAt
 * @property string $createAt
 *
 * @property City $city
 *
 * @author Saghar Mojdehi <saghar.mojdehi@gmail.com>
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_address';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'createAt',
                'updatedAtAttribute' => 'updateAt',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cityId', 'address'], 'required'],
            [['cityId'], 'integer'],
            [['address'], 'string'],
            [['latitude', 'longitude'], 'number'],
            [['updateAt', 'createAt'], 'safe'],
            [['zipCode'], 'string', 'max' => 255],
            [['cityId'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['cityId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cityId' => 'City ID',
            'address' => 'Address',
            'zipCode' => 'Zip Code',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'updateAt' => 'Update At',
            'createAt' => 'Create At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'cityId']);
    }

    /**
     * Create new address
     *
     * @param array $data <code>
     *      [
     *          'cityId' => $cityId,
     *          'address' => $address,
     *          'zipCode' => zipCode,
     *          'latitude' => $latitude,
     *          'longitude' => $longitude,
     *      ]
     * </code>
     *
     * @internal  integer $cityId cityId
     *
     * @internal  string $zipCode zipCode
     *
     * @internal  double $latitude latitude
     *
     * @internal  double $longitude longitude
     *
     * @return Address|null
     */
    public static function create($data)
    {
        $address = new Address();
        $address->cityId = isset($data['cityId']) ? $data['cityId'] : null;
        $address->address = isset($data['address']) ? $data['address'] : null;
        $address->zipCode = isset($data['zipCode']) ? $data['zipCode'] : null;
        $address->latitude = isset($data['latitude']) ? $data['latitude'] : null;
        $address->longitude = isset($data['longitude']) ? $data['longitude'] : null;

        if ($address->save()) {
            \Yii::$app->getSession()->setFlash('success', 'آدرس ذخیره شد.');
            return $address;
        } else {
            \Yii::error($address->getErrors());
            \Yii::$app->getSession()->setFlash('error', 'آدرس ذخیره نشد.');
            return null;
        }
    }

    /**
     * Edit address
     *
     * @param $id
     * @param array $data <code>
     *      [
     *          'cityId' => $cityId,
     *          'address' => $address,
     *          'zipCode' => zipCode,
     *          'latitude' => $latitude,
     *          'longitude' => $longitude,
     *      ]
     * </code>
     *
     * @internal  integer $cityId cityId/null
     *
     * @internal  string $zipCode zipCode/null
     *
     * @internal  double $latitude latitude/null
     *
     * @internal  double $longitude longitude/null
     *
     * @return null|Address
     */
    public static function edit($id, $data)
    {
        $address = Address::findOne($id);
        if ($address) {
            $address->cityId = isset($data['cityId']) ? $data['cityId'] : $address->cityId;
            $address->address = isset($data['address']) ? $data['address'] : $address->address;
            $address->zipCode = isset($data['zipCode']) ? $data['zipCode'] : $address->zipCode;
            $address->latitude = isset($data['latitude']) ? $data['latitude'] : $address->latitude;
            $address->longitude = isset($data['longitude']) ? $data['longitude'] : $address->longitude;
            if ($address->save()) {
                \Yii::$app->getSession()->setFlash('success', 'تغییرات ذخیره شد.');
                return $address;
            } else {
                \Yii::error($address->getErrors());
                \Yii::$app->getSession()->setFlash('error', 'تغییرات ذخیره نشد.');
                return null;
            }
        } else {
            \Yii::$app->getSession()->setFlash('error', 'آدرس پیدا نشد');
            return null;
        }
    }
}
