<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fasilitas */

$this->title = 'Create Fasilitas';
$this->params['breadcrumbs'][] = ['label' => 'Fasilitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fasilitas-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
