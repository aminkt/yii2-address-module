<?php
/** @var \yii\data\ActiveDataProvider $dataProvider
 * @var \saghar\address\models\Address $model
 */

$this->title = "مدیریت آدرس ها"
?>
<div class="addressManager-default-index">
    <h1><?= $this->title ?></h1>
    <p>
        <?= yii\helpers\Html::a('ایجاد آدرس جدید', ['/address/default/create'], ['class' => 'btn btn-primary']) ?>
        <?= \yii\grid\GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => "",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'city',
                    'value' => function ($model) {
                        return $model->getCityName();
                    }
                ],
                [
                    'attribute' => 'zipCode'
                ],
                [
                    'attribute' => 'address'
                ],
                [
                    'attribute' => 'latitude'
                ],
                [
                    'attribute' => 'longitude'
                ],
                [
                    'attribute' => 'createAt'
                ],
                [
                    'attribute' => 'updateAt'
                ],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'urlCreator' => function ($action, $model, $key, $index) {
                        if ($action === 'update') {
                            return \yii\helpers\Url::to(['default/update', 'id' => $model->id]);
                        }
                        if ($action === 'delete') {
                            return \yii\helpers\Url::to(['default/delete', 'id' => $model->id]);
                        }
                        if ($action == 'view') {
                            return  \yii\helpers\Url::to(['default/view', 'id' => $model->id]);
                        }
                    }
                ],
            ]
        ]); ?>
    </p>
</div>
