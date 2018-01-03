<?php

namespace saghar\address\controllers;

use saghar\address\models\Address;
use saghar\address\models\State;
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
     * Create new address
     * @return string
     */
    public function actionCreate()
    {
        $model = new Address();
        $states = State::find()->all();
        $stateModel = new State();

        if (\Yii::$app->getRequest()->isPost) {
            $address = Address::create(\Yii::$app->getRequest()->post('Address'));
            if ($address) {
                return $this->render('index');
            }
        }

        return $this->render('add_address', [
            'model' => $model,
            'states' => $states,
            'stateModel' => $stateModel,
        ]);
    }

    /**
     * Update address
     * @param $id
     * @return string
     */
    public function actionUpdate($id)
    {
        $model = Address::findOne($id);

        if (\Yii::$app->getRequest()->isPost) {
            $address = Address::edit($id, \Yii::$app->getRequest()->post('Address'));
            if ($address) {
                return $this->render('index');
            }
        }
        return $this->render('update_address', [
            'model' => $model
        ]);
    }
}
