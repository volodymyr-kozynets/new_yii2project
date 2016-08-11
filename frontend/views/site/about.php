<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->registerLinkTag([
        'rel' => 'shortcut icon',
        'type' => 'image/x-icon',
        'href' => '../favicon.ico',
]);

$this->title = 'Приветствуем Вас на BESTPLACE.IN.UA!';
//$this->params['breadcrumbs'][] = $this->title;

?>
    <section id="intro" class="section intro">
        <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="intro-content">
                <h2>Приветствуем Вас на страничке нашего магазина детской обуви!</h2>
              </div>

              <!-- intro --> 
            </div>
            <div class="col-md-7  col-md-offset-1 col-sm-6">
              <div class="intro-content">
                <p>Предлагаем недорогую детскую обувь отличного качества. 
                  Надежные и внимательные продавцы детской обуви, что подтверждается многочисленными положительными отзывами и благодарностями покупателей не только ВКонтакте но и Kidstaff, Klumba. 
                  Просмотрите наш каталог, выберите интересующую пару!
                  Индивидуальный подбор и консультации. Подберите себе детские ботиночки, кроссовочки и кеды.</p>
              </div>
              <!-- intro --> 
            </div>
          </div>
        </div>
</section>
