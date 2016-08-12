<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use frontend\models\Newsblog;
use frontend\models\NewsblogSearch;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\NewsblogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Детские туфельки на Осень';
?>
<div class="newsblog-index">
    <div class="banner-area"> 
        <!-- overlay -->
        <div class="banner-area-gradient"></div>
        <!-- overlay -->
        <div class="inner-bg">
          <div class="container">
            <div class="col-md-10 col-md-offset-1">
              <div class="banner-text text-center">
                    <div class="logo">
                        <h1>Детская обувь на Осень для девочек!</h1>
                        <p>Вы в поиске туфелек для своей принцессы  к первому сентября?<br/>
                        Значит вы попали по адресу!<br/>
                        Представляем вашему вниманию качественную детскую обувь таких торговых марок как B&G, Little Deer, Шалунишка, J&G - John Gold
                        </p>
                        <p>Познакомтесь с представленной у нас обувью в разделе КАТАЛОГ
                        </p>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

<section class="border-line">
        <div class="text-center"><a name="pricelist"></a>Наши Новости</div>
</section>

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="row">
        <div class="container">
                <?php 
                    $dataProvider = new ActiveDataProvider([
                        'query' => Newsblog::find()->orderBy('id DESC'),
                    ]);
                    echo ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_post',
                    ]);
                ?>
        </div>
    </div>
