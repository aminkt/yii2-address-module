<?php

namespace saghar\address\models;

use aminkt\widgets\alert\Alert;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\web\NotFoundHttpException;

/**
 * This is the model class for table "{{%address}}".
 *
 * @property int                         $id
 * @property int                         $cityId
 * @property string                      $address
 * @property string                      $zipCode
 * @property double                      $latitude
 * @property double                      $longitude
 * @property string                      $updateAt
 * @property string                      $createAt
 *
 * @property \saghar\address\models\City $city
 * @property string                      $cityName
 * @property string                      $stateName
 * @property string                      $countryName
 */
class Address extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%address}}';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['createAt', 'updateAt'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updateAt'],
                ],
                // if you're using datetime instead of UNIX timestamp:
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
            'cityId' => 'شهر',
            'cityName' => 'شهر',
            'stateName' => 'استان',
            'countryName' => 'کشور',
            'address' => 'آدرس',
            'zipCode' => 'کدپستی',
            'latitude' => 'عرض جغرافیایی',
            'longitude' => 'طول جغرافیایی',
            'updateAt' => 'تاریخ ویرایش',
            'createAt' => 'تاریخ ایجاد',
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
     * @internal  string $address address/null
     *
     * @internal  string $zipCode zipCode
     *
     * @internal  double $latitude latitude
     *
     * @internal  double $longitude longitude
     *
     * @return Address
     *
     * @throws \RuntimeException
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
            Alert::success('عملیات با موفقیت انجام شد', 'آدرس جدید ذخیره شد');
            return $address;
        } else {
            throw new \RuntimeException('آدرس ذخیره نشد.');
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
     * @internal  string $address address/null
     *
     * @internal  string $zipCode zipCode/null
     *
     * @internal  double $latitude latitude/null
     *
     * @internal  double $longitude longitude/null
     *
     * @return Address
     *
     * @throws \RuntimeException
     * @throws NotFoundHttpException
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
                Alert::success('عملیات با موفقیت انجام شد', 'آدرس ویرایش شد');
                return $address;
            } else {
                throw new \RuntimeException('تغییرات ذخیره نشد.');
            }
        } else {
            throw new NotFoundHttpException('آدرس پیدا نشد');
        }
    }

    /**
     * Returns city name
     *
     * @return int/string
     */
    public function getCityName()
    {
        return $this->city->name;
    }

    /**
     * Returns state name
     *
     * @return int/string
     */
    public function getStateName()
    {
        return $this->city->state->name;
    }

    /**
     * Returns country name
     *
     * @return int
     */
    public function getCountryName()
    {
        return $this->city->state->country->name;
    }
}
