<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-index">

<div class="box box-primary">
    <div class="box-header with-border">

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah Admin', ['create'], ['class' => 'btn btn-success']) ?>
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

            //'id_admin',
            'username',
            'password',
            'no_hp',
            'alamat',
            //'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
