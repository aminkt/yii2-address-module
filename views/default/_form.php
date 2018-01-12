<?php
/** @var \yii\web\View $this */
/** @var \saghar\address\models\Address $model */

$url = \yii\helpers\Url::to(['/address/default/get-cities'], true);
$this->title = "ثبت آدرس جدید"
?>
<div class="addressManager-form">
    <?php $form = \yii\widgets\ActiveForm::begin(['method' => 'post']); ?>

    <?php
    $cities = \saghar\address\models\City::find()->all();
    $cities = \yii\helpers\ArrayHelper::map($cities, 'id', 'name', 'stateName');

    echo $form->field($model, 'cityId')->widget(\kartik\select2\Select2::className(), [
        'data' => $cities,
        'options' => ['placeholder' => 'دسته را انتخاب کنید ...'],
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]);
    ?>

    <?= $form->field($model, 'address')->textarea() ?>

    <?= $form->field($model, 'zipCode')->textInput() ?>


    <?= \yii\helpers\Html::submitButton($model->isNewRecord ? "ذخیره" : "ویرایش", [
        'class' => 'btn btn-primary'
    ]) ?>

    <?php \yii\widgets\ActiveForm::end(); ?>
</div>
