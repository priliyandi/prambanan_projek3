<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tamu */

$this->title = 'Detail Tamu: '. $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Tamus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tamu-view">


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->no_ktp], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->no_ktp], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no_ktp',
            'nama',
            'no_hp',
            'alamat',
            'email:email',
            'username',
            'password',
        ],
    ]) ?>

</div>
