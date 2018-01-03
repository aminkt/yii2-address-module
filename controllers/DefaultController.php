<?php

namespace saghar\address\controllers;

use saghar\address\models\Address;
use saghar\address\models\City;
use saghar\address\models\State;
use yii\data\ActiveDataProvider;
use yii\db\StaleObjectException;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `addressManager` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionIndex()
    {
        $addresses = Address::find();
        if (!$addresses) {
            throw new NotFoundHttpException("آدرسی پیدا نشد");
        }
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
     * @param $id
     * @return string
     * @throws ForbiddenHttpException
     */
    public function actionGetCities($id)
    {
        if (!\Yii::$app->getRequest()->isAjax) {
            throw new ForbiddenHttpException("شما دسترسی مجاز ندارید");
        } else {
            $cities = City::find()->where([
                'stateId' => $id
            ])->all();
            if ($cities) {
                return json_encode(ArrayHelper::map($cities, "id", "name"));
            }
        }
    }

    /**
     * Update address
     * @param $id
     * @return string
     * @throws NotFoundHttpException
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

    /**
     * Delete address
     * @param $id
     * @throws NotFoundHttpException
     */
    public function actionDelete($id)
    {
        $address = Address::findOne($id);
        if ($address) {
            try {
                $address->delete();
                \Yii::$app->getSession()->setFlash("success", "آدرس حذف شد");
                $this->render('index');
            } catch (StaleObjectException $e) {
            } catch (\Exception $e) {
                \Yii::error($e->getMessage());
                \Yii::$app->getSession()->setFlash("error", "آدرس حذف نشد");
            }
        } else {
            throw new NotFoundHttpException("آدرس پیدا نشد");
        }
    }

    /**
     * View Address
     * @param $id
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionView($id)
    {
        $address = Address::findOne($id);
        if ($address) {
            return $this->render('view_address', [
                "model" => $address
            ]);
        } else {
            throw new NotFoundHttpException("آدرس پیدا نشد");
        }
    }
}
