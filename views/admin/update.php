<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Admin */

$this->title = 'Update Admin: ' . $model->id_admin;
$this->params['breadcrumbs'][] = ['label' => 'Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_admin, 'url' => ['view', 'id' => $model->id_admin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="admin-update">

  

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
