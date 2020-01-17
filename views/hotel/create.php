<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hotel */

$this->title = 'Create Hotel';
$this->params['breadcrumbs'][] = ['label' => 'Hotels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hotel-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
