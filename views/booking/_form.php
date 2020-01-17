<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Kamar;
use app\models\Tamu;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-form">

    <div class="box box-primary">
    <div class="box-header with-border">
    <h4 class ="box-tittle">Form Booking</h4>
    </div>

    <?php $form = ActiveForm::begin([
    'type'=>'horizontal',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
    'fieldConfig' => [
        'horizontalCssClasses' => [
            'label' => 'col-sm-2',
            'wrapper' => 'col-sm-4',
            'error' => '',
            'hint' => '',
        ],
    ]
]) ?>

   <?= $form->field($model, 'id')->textInput() ?>

   <?=$form->field($model, 'id_tamu')->dropDownList(
        ArrayHelper::map(Tamu::find()->all(),'no_ktp','nama'),
        ['prompt'=>'Pilih Tamu']
    )
    ?>

    <?=$form->field($model, 'id_kamar')->dropDownList(
        ArrayHelper::map(Kamar::find()->all(),'id_kamar','lokasi'),
        ['prompt'=>'Pilih Kamar']
    )
    ?>

    <?= $form->field($model, 'check_in')->widget(
        DatePicker::className(),[
            'inline' => false,
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-m-d'
            ]
        ]
    ) ?>


    <?= $form->field($model, 'check_out')->widget(
        DatePicker::className(),[
            'inline' => false,
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-m-d'
            ]
        ]
    ) ?>


    <?= $form->field($model, 'tanggal_pesan')->widget(
        DatePicker::className(),[
            'inline' => false,
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-m-d'
            ]
        ]
    ) ?>


    <?= $form->field($model, 'status')->textInput() ?>

    <div class="box-footer">
        <div class="col-sm-offset-2 col-sm-3">
            <?= Html::submitButton('<i class="fa fa-check"></i> Simpan',['class' => 'btn btn-success btn-flat']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
