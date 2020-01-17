<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HotelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hotel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_hotel') ?>

    <?= $form->field($model, 'id_fasilitas') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'gambar') ?>

    <?= $form->field($model, 'lokasi') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'telepon') ?>

    <?php // echo $form->field($model, 'ket') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
