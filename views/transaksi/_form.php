<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
//use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Transaksi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-form">

<div class="penerbit-form">
    <div class="box box-primary">
    <div class="box-header with-border">
    <h4 class ="box-tittle">Form Transaksi</h4>
    </div>

    <div class= "box-body">

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
]); ?>

    <?= $form->field($model, 'id_booking')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'metode_pembayaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_transaksi')->widget(
        DatePicker::className(),[
            'inline' => false,
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-m-d'
            ]
        ]
    ) ?>

    <div class="box-footer">
        <div class="col-sm-offset-2 col-sm-3">
            <?= Html::submitButton('<i class="fa fa-check"></i> Simpan',['class' => 'btn btn-success btn-flat']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
