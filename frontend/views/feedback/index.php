<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FeedbackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->registerLinkTag([
        'rel' => 'shortcut icon',
        'type' => 'image/x-icon',
        'href' => '../favicon.ico',
]);

$this->title = 'Отзывы наших покупателей';
//$this->params['breadcrumbs'][] = $this->title;
?>
   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <section id="feedback" class="section feedback">
    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="feedback-text">
                    <p>Надежда</p>
                    <img class="img-responsive img-circle center-block" src="../images/feedback/Nadezhda.jpg" alt="klient feedback">
                    <p>Спасибо большое за сандалики! В живую они еще красивее, чем на фото. Очень довольна!!!! Спасибо за Ваш труд и минимальные цены!!!</p>
                </div>  
            </div>
            <div class="col-md-4">
                <div class="feedback-text">
                    <p>Юлия</p>
                    <img class="img-responsive img-circle center-block" src="../images/feedback/Yulia.jpg" alt="klient feedback">
                    <p>Дочурка, вообще в восторге! На улицу кроме них ничего не хочет обувать! ))))))) Отличный магазин, всем советую! И конечно же, скоро будет снова новая заказанная пара сапожек!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feedback-text">
                    <p>Лилия</p>
                    <img class="img-responsive img-circle center-block" src="../images/feedback/Lilia.jpg" alt="klient feedback">
                    <p>Спасибо большое за кеды! Очень классные. Хорошо, когда есть такие ответственные продавцы как вы. Приятно иметь дело с такими людьми.</p>
                </div>
            </div>
        </div>
    </div>
</section>
    
    <?php /*echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'feedback_time',
            'feedback_name',
            'feedback_description:ntext',
            'feedback_photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);*/ ?>
