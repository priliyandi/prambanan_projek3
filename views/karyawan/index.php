<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KaryawanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Karyawan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="karyawan-index">
<div class="box box-primary">
    <div class="box-header with-border">


    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah Karyawan', ['create'], ['class' => 'btn btn-success']) ?>
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

            //'id_karyawan',
            'nama',
            'no_hp',
            'email:email',
            'alamat',
            //'jabatan',
            //'username',
            //'password',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
