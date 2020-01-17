<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tamu */

$this->title = 'Create Tamu';
$this->params['breadcrumbs'][] = ['label' => 'Tamus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tamu-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
