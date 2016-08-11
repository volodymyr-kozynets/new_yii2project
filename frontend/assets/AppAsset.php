<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/bootstrap.css',
        'css/main.css',
        'css/responsive.css',
        'css/img_animate.css',
    ];
    public $js = [
        'js/jquery.backstretch.min.js',
        'js/main.js',
        'js/jquery.maskedinput.js',
        'js/jquery.subscribe.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
