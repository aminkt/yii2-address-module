<?php
/** @var \yii\web\View $this */
/** @var \saghar\address\models\Address $model */
/** @var \saghar\address\models\State[] $states */
/** @var \saghar\address\models\State $stateModel */

$url = \yii\helpers\Url::to(['/address/default/get-cities'], true);
?>
<div class="addressManager-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        <?php $form = \yii\widgets\ActiveForm::begin([
            'method' => 'post'
        ]); ?>
        >
        <?= $form->field($model, 'address')->textarea() ?>
        <?= $form->field($model, 'zipCode')->textInput() ?>
        <?= $form->field($model, 'cityId')->textInput() ?>
    <?= \yii\helpers\Html::submitButton("Submit", [
        'class' => 'btn btn-primary'
    ]) ?>


    <?php \yii\widgets\ActiveForm::end(); ?>
    </p>
</div>
