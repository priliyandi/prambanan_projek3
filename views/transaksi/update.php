<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Transaksi */

$this->title = 'Update Transaksi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaksi-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
