<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Hotel */

$this->title = 'Detail Hotel : '. $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Hotels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hotel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_hotel], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_hotel], [
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
            'id_hotel',
            'id_fasilitas',
            'nama',
            //'gambar',
            [
              'attribute' => 'gambar',
              'format' =>'raw',
              'headerOptions' => ['style' => 'text-align:center;'],
              'value' => function ($model){
                if ($model->gambar != '') {
                    return Html::img('@web/upload/gambar/'. $model->gambar,['class'=>'img-responsive','style' => 'width:150px','height:150px', 'align'=>'center']);
                }else{
                  return '<div align="center"><h2>No Image</h2></div>';
                }
              },
            ],
            'lokasi:ntext',
            'email:email',
            'telepon',
            'ket',
        ],
    ]) ?>

</div>
