<?php
/** @var \yii\web\View $this
/** @var \yii\data\ActiveDataProvider $dataProvider
 * @var \saghar\address\models\Address $model
 */

$this->title = "آدرس های ثبت شده";
?>
<div class="addressManager-default-index">
    <h1><?= $this->title ?></h1>
    <div class="row">
        <div class="col-md-8">
            <?= \yii\grid\GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => "",
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    [
                        'attribute' => 'countryName',
                    ],
                    [
                        'attribute' => 'stateName',
                    ],
                    [
                        'attribute' => 'cityName',
                    ],
                    [
                        'attribute' => 'address'
                    ],
                    [
                        'label' => 'تاریخ',
                        'format' => 'raw',
                        'value' => function ($model) {
                            /** @var \saghar\address\models\Address $model */
                            $updateDate = Yii::$app->getFormatter()->asDatetime($model->updateAt);
                            $createDate = Yii::$app->getFormatter()->asDatetime($model->updateAt);
                            $html = <<<HTML
تاریخ ویرایش : $updateDate <br>
 تاریخ ایجاد : $createDate
HTML;
                            return $html;
                        }
                    ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'urlCreator' => function ($action, $model, $key, $index) {
                            if ($action === 'update') {
                                return \yii\helpers\Url::to(['default/index', 'id' => $model->id]);
                            }
                            if ($action === 'delete') {
                                return \yii\helpers\Url::to(['default/delete', 'id' => $model->id]);
                            }
                            if ($action == 'view') {
                                return \yii\helpers\Url::to(['default/view', 'id' => $model->id]);
                            }
                        }
                    ],
                ]
            ]); ?>
        </div>
        <div class="col-md-4">
            <?php
            echo $this->render('_form', ['model' => $model]);
            ?>
        </div>
    </div>
</div>
