<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\form\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Kamar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kamar-form">
    <div class="box box-primary">
    <div class="box-header with-border">
    <h4 class ="box-tittle">Form Kamar</h4>
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

    <?= $form->field($model, 'id_fasilitas')->textInput() ?>

    <?= $form->field($model, 'no_kamar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gambar')->fileInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="box-footer">
        <div class="col-sm-offset-2 col-sm-3">
            <?= Html::submitButton('<i class="fa fa-check"></i> Simpan',['class' => 'btn btn-success btn-flat']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
