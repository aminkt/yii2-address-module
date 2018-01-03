<?php
/** @var \saghar\address\models\Address $model */
/** @var \saghar\address\models\State $states */
/** @var \saghar\address\models\State $stateModel */
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
<!--        --><?//= $form->field($stateModel, 'name')->widget(kartik\select2\Select2::classname(), [
//            'data' => $states,
//            'language' => 'de',
//            'options' => ['placeholder' => 'Select a state ...'],
//            'pluginOptions' => [
//                'allowClear' => true
//            ],
//        ]); ?>
        <?= \yii\helpers\Html::submitButton("Submit", [
            'class' => 'btn btn-primary'
        ]) ?>


        <?php \yii\widgets\ActiveForm::end(); ?>
    </p>
</div>
