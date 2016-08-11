<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->registerLinkTag([
        'rel' => 'shortcut icon',
        'type' => 'image/x-icon',
        'href' => '../favicon.ico',
]);

$this->title = 'Услуги которые мы предоставляем нашим клиентам!';
//$this->params['breadcrumbs'][] = $this->title;
?>
<section id="service" class="service">
    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="row service-block">
                    <div class="col-md-3"><i class="fa fa-shopping-cart fa-5x icon-fa-shadow" style="color: #92a8d1" aria-hidden="true"></i></div>
                    <div class="col-md-8"><h5>Простота заказа</h5>Просто нажмите кнопку купить возле карточки понравившейся Вам обуви, оставьте в форме свой номер телефона или E-mail.</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row service-block">
                    <div class="col-md-3"><i class="fa fa-phone fa-5x icon-fa-shadow" style="color: #92a8d1" aria-hidden="true"></i></div>
                    <div class="col-md-8"><h5>Обратный звонок</h5> Оставьте в форме свой номер телефона и мы свяжемся с вами в самое ближайшее время.</div>
                </div>
                <div class="row service-block">
                    <div class="col-md-3"><i class="fa fa-refresh  fa-5x icon-fa-shadow" style="color: #92a8d1" aria-hidden="true"></i></div>
                    <div class="col-md-8"><h5>Консультация и индивидуальный подбор обуви</h5> Поможем вам макисмально точно подобрать размер обуви под особенности ножки вашего ребенка</div>
                </div>  
            </div>
            <div class="col-md-6">
                <div class="row service-block">
                    <div class="col-md-3"><i class="fa fa-user fa-5x icon-fa-shadow" style="color: #92a8d1" aria-hidden="true"></i></div>
                    <div class="col-md-8"><h5>Связь в течении 24 часов в сутки</h5> Вы можете оставить свой вопрос в форме и мы свяжемся с ами по електронной почте</div>
                </div>  
                <div class="row service-block">
                    <div class="col-md-3"><i class="fa fa-truck fa-5x icon-fa-shadow" style="color: #92a8d1" aria-hidden="true"></i></div>
                    <div class="col-md-8"><h5>Доставка всеми службами доставки а так же курьером по Киеву</h5> Отправляем обувь теми службами доставки которые удобны Вам. Так же у нас есть собственный курьер по Киеву, который может доставить Вам обувь на примерку.</div>
                </div>
            </div>
        </div>
    </div>
</section>
