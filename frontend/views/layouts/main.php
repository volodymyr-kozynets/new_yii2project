<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerLinkTag([
        'rel' => 'shortcut icon',
        'type' => 'image/x-icon',
        'href' => 'favicon.ico',
    ]);?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'BP.IN.UA',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default',
        ],
    ]);
    $menuItems = [
        ['label' => 'Каталог', 'url' => ['/items/index']],
        ['label' => 'Отзывы', 'url' => ['/feedback/index']],
//        ['label' => 'Dropdown', 'items' => 
//        [
//            ['label' => 'Отзывы', 'url' => ['#']],
//            ['label' => 'Отзывы', 'url' => ['#']],
//        ]
//        ],
        ['label' => 'О нас', 'url' => ['/site/about']],
        ['label' => 'Услуги для Вас', 'url' => ['/site/service']],
        ['label' => 'Связаться с нами', 'url' => ['/site/contact']],
    ];
//    if (Yii::$app->user->isGuest) {
//        //$menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
//        $menuItems[] = '<li>' . Html::a( '<i class="fa fa-1x fa-sign-in" aria-hidden="true"></i>', $url = ['/site/login'], $options = [] ) . '</li>';
//    } else {
//        $menuItems[] = '<li>'
//            . Html::beginForm(['/site/logout'], 'post')
//            . Html::submitButton(
//                '<i class="fa fa-sign-out" aria-hidden="true"></i>(' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn logout-button']
//            )
//            . Html::endForm()
//            . '</li>';
//    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left text-center'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>


        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>

</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; BESTPLACE.IN.UA <?= date('Y') ?></p>

        <p class="pull-right">Тел.: +38(063)935-50-85</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
