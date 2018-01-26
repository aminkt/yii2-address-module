<?php
/** @var \yii\web\View $this */

use yii\web\JsExpression;

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
        'options' => ['placeholder' => 'شهر را انتخاب کنید ...'],
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]);
    ?>

    <?= $form->field($model, 'address')->textarea() ?>

    <?= $form->field($model, 'zipCode')->textInput() ?>

    <?= $form->field($model, 'latitude')->hiddenInput(['id' => 'us2-lat'])->label(false) ?>
    <?= $form->field($model, 'longitude')->hiddenInput(['id' => 'us2-lon'])->label(false) ?>

    Location: <input type="text" id="us2-address" style="width: 200px"/>
    <br>

    <?php
    echo \pigolab\locationpicker\LocationPickerWidget::widget([
        'key' => 'AIzaSyBjFztI9oEaunJToOiAQ9lSS8Bfbre3BNo',	// require , Put your google map api key
        'options' => [
            'style' => 'width: 100%; height: 400px', // map canvas width and height
        ] ,
        'clientOptions' => [
            'location' => [
                'latitude'  => 37.28083300 ,
                'longitude' => 49.58305600,
            ],
            'addressFormat' => 'street_number',
            'inputBinding' => [
                'latitudeInput'     => new JsExpression("$('#us2-lat')"),
                'longitudeInput'    => new JsExpression("$('#us2-lon')"),
                'locationNameInput' => new JsExpression("$('#us2-address')")
            ],

        ]
    ]);
    ?>

    <?= \yii\helpers\Html::submitButton($model->isNewRecord ? "ذخیره" : "ویرایش", [
        'class' => 'btn btn-primary'
    ]) ?>

    <?php \yii\widgets\ActiveForm::end(); ?>
</div>
