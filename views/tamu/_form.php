<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
//use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tamu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tamu-form">
    <div class="box box-primary">
    <div class="box-header with-border">
    <h4 class ="box-tittle">Form Tamu</h4>
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

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_hp')->textInput() ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

     <div class="box-footer">
        <div class="col-sm-offset-2 col-sm-3">
            <?= Html::submitButton('<i class="fa fa-check"></i> Simpan',['class' => 'btn btn-success btn-flat']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
