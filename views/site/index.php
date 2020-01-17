<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Kamar;
use app\models\Tamu;
use app\models\Booking;
use app\models\Transaksi;
use app\models\Fasilitas;

/* @var $this yii\web\View */

$this->title = 'Halaman Dashboard';
?>
<div class="site-index">

     <div class="body-content">

        <div class="row">
         <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <div class="icon"><i class="fa fa-tasks"></i></div>
              <h3><div class="count"><?= Yii::$app->formatter->asInteger(Kamar::getKamarCount()); ?></div></h3>
              <h4>Kamar</h4>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/project3_hotel/web/index.php?r=kamar" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      


        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <div class="icon"><i class="fa fa-tasks"></i></div>
              <h3><div class="count"><?= Yii::$app->formatter->asInteger(Tamu::getTamuCount()); ?></div></h3>
              <h4>Tamu</h4>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/project3_hotel/web/index.php?r=tamu" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <div class="icon"><i class="fa fa-tasks"></i></div>
              <h3><div class="count"><?= Yii::$app->formatter->asInteger(Booking::getBookingCount()); ?></div></h3>
              <h4>Booking</h4>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/project3_hotel/web/index.php?r=booking" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <div class="icon"><i class="fa fa-tasks"></i></div>
              <h3><div class="count"><?= Yii::$app->formatter->asInteger(Fasilitas::getFasilitasCount()); ?></div></h3>
              <h4>Fasilitas</h4>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/project3_hotel/web/index.php?r=fasilitas" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
    </div>
</div>
</div>
