<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Transaksi;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Booking';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-index">
<div class="box box-primary">
    <div class="box-header">

     <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i>Tambah Pemesanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p> 

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   </div>

<div class= "box-body">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'id_tamu',
            [
                'attribute' => 'id_tamu',
                //'filter' => Penulis::getList(),
               'headerOptions' => ['style' => 'text-align:center;'],
               'contentOptions' => ['style' => 'text-align:center'],
                'value' => function ($data)
                {
                    return @$data->tamu->nama;
                }
            ],

            //'id_kamar',
            [
                'attribute' => 'id_kamar',
                //'filter' => Penulis::getList(),
               'headerOptions' => ['style' => 'text-align:center;'],
               'contentOptions' => ['style' => 'text-align:center'],
                'value' => function ($data)
                {
                    return @$data->kamar->lokasi;
                }
            ],

            'check_in',
            'check_out',
            'tanggal_pesan',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

</div>
