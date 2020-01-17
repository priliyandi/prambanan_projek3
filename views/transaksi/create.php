<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Transaksi */

$this->title = 'Create Transaksi';
$this->params['breadcrumbs'][] = ['label' => 'Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
