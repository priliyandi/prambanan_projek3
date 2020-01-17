<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hotel */

$this->title = 'Update Hotel: ' . $model->id_hotel;
$this->params['breadcrumbs'][] = ['label' => 'Hotels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_hotel, 'url' => ['view', 'id' => $model->id_hotel]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hotel-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
