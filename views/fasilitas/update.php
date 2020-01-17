<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fasilitas */

$this->title = 'Update Fasilitas: ' . $model->id_fasilitas;
$this->params['breadcrumbs'][] = ['label' => 'Fasilitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_fasilitas, 'url' => ['view', 'id' => $model->id_fasilitas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fasilitas-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
