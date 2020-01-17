<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TransaksiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Transaksi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-index">
<div class="box box-primary">
    <div class="box-header with-border">

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah Penerbit', ['create'], ['class' => 'btn btn-success']) ?>
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

            //'id',
            //'id_booking',
            [
                'attribute' => 'id_booking',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align: center'],
                'value' => function ($data)
                {
                    return @$data->booking->nama;
                    # code...
                }
            ],
            'harga',
            'jumlah',
            'metode_pembayaran',
            //'tanggal_transaksi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
