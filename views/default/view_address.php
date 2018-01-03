<?php /** @var \saghar\address\models\Address $model */ ?>


<p>
    <?=
    yii\widgets\DetailView::widget([
        'model' => $model,
        'attributes' => [
            'address' => [
                'label' => 'آدرس',
                'value' => $model->address
            ],
            'zipCode' => [
                'label' => 'کد پستی',
                'value' => $model->zipCode
            ],
            'city' => [
                'label' => 'شهر',
                'value' => $model->getCityName()
            ],
            'state' => [
                'label' => 'استان',
                'value' => $model->getStateName()
            ],
            'country' => [
                'label' => 'کشور',
                'value' => $model->getCountryName()
            ],
            'latitude' => [
                'label' => 'عرض جغرافیایی',
                'value' => $model->latitude
            ],
            'longitude' => [
                'label' => 'طول جغرافیایی',
                'value' => $model->longitude
            ],
            'createAt' => [
                'label' => 'تاریخ ایجاد',
                'value' => $model->createAt
            ],
            'updateAt' => [
                'label' => 'تاریخ ویرایش',
                'value' => $model->updateAt
            ],
        ],
    ]);
    ?>
</p>
