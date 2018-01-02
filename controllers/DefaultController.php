<?php

namespace saghar\address\controllers;

use saghar\address\models\Address;
use saghar\address\models\City;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

/**
 * Default controller for the `addressManager` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $addresses = Address::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $addresses
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    /**
     * Create address form
     * @return string
     */
    public function actionAddressForm()
    {
        $cities = City::find()->all();

        return $this->render('addressForm', [
            'cities' => $cities
        ]);
    }

    /**
     * Create new address
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

     * @return string
     */
    public function actionCreate($data)
    {
        $address = Address::create($data);

        if ($address) {
            return $this->render('index');
        }
        return $this->render('address');
    }


    public function actionEdit($id, $data)
    {
        $address = Address::edit($id, $data);
    }
}
