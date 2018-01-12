<?php

namespace saghar\address\controllers;

use aminkt\widgets\alert\Alert;
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
     * Renders the index view for the module to show list of addresses, create and update actions.
     *
     * @param null|integer $id If trying to update an address this arg will find that address.
     *
     * @return string
     *
     * @throws \yii\web\NotFoundHttpException
     *
     * @author Saghar Mozhdehi
     * @author Amin Keshavarz <amin@keshavarz.pro>
     */
    public function actionIndex($id = null)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Address::find()
        ]);

        if ($id) {
            $model = Address::findOne($id);
            if (!$model) {
                throw new NotFoundHttpException("آدرس مورد نظر یافت نشد.");
            }
        } else {
            $model = new Address();
        }
        if (\Yii::$app->getRequest()->isPost) {
            try {
                if ($model->isNewRecord) {
                    $address = Address::create(\Yii::$app->getRequest()->post('Address'));
                } else {
                    $address = Address::edit($id, \Yii::$app->getRequest()->post('Address'));
                }

                return $this->redirect(['index']);
            } catch (\RuntimeException $exception) {
                Alert::error("خطا در ثبت اطلاعات", "آدرس ذخیره نشد. دوباره تلاش کنید.");
            }
        }

        return $this->render('index', [
            'dataProvider' => $dataProvider,
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
                $this->redirect('index');
            } catch (\Exception $e) {
                \Yii::error($e->getMessage());
                Alert::error('خطا در انجام عملیات', 'دسته مورد نظر حذف نشد');
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
