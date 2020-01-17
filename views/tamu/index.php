<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TamuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Tamu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tamu-index">

<div class="box box-primary">
    <div class="box-header">

    

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i>Tambah Tamu', ['create'], ['class' => 'btn btn-success']) ?>
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

            'no_ktp',
            'nama',
            'no_hp',
            'alamat',
            'email:email',
            //'username',
            //'password',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
