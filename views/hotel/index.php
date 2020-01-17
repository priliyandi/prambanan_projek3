<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HotelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Hotel';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hotel-index">
<div class="box box-primary">
    <div class="box-header with-border">

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah Kategori', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
        'header' => 'No.',
                'headerOptions' => ['style' => 'text-align:center'],
                'contentOptions' => ['style' => 'text-align:center']
            ],
            //'id_hotel',
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
            //'email:email',
            //'telepon',
            //'ket',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
