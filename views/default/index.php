<?php
/** @var \yii\data\ActiveDataProvider $dataProvider
 * @var \saghar\address\models\Address $model
 */
?>
<div class="addressManager-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
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
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'zipCode'
                ],
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'address'
                ],
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'latitude'
                ],
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'longitude'
                ],
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'createAt'
                ],
                ['class' => 'yii\grid\SerialColumn'],
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
                    }
                ],
            ]
        ]); ?>
    </p>
</div>
