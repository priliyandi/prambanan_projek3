<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tamu */

$this->title = 'Update Tamu: ' . $model->no_ktp;
$this->params['breadcrumbs'][] = ['label' => 'Tamus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_ktp, 'url' => ['view', 'id' => $model->no_ktp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tamu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
