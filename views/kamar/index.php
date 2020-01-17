<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KamarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Kamar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kamar-index">
<div class="box box-primary">
    <div class="box-header">

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i>Tambah Kamar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    </div>

    <div class= "box-body">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
            'header' => 'No.',
                'headerOptions' => ['style' => 'text-align:center'],
                'contentOptions' => ['style' => 'text-align:center']
            ],

            //'id_kamar',
            'id_fasilitas',
            'no_kamar',
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
            
             [
            'attribute'=>'status',
            'value'=>function($data){
                    return $data->getStatus();//Untuk memanggil method di sertakan objek nya dulu ($data)
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
