<?php
/** @var \yii\data\ActiveDataProvider $dataProvider*/
?>
<div class="addressManager-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        <?= \yii\grid\GridView::widget([
           'dataProvider' => $dataProvider
]);?>
    </p>
</div>
