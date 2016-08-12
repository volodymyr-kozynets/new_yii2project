<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Newsblog */

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;

$this->registerLinkTag([
        'rel' => 'shortcut icon',
        'type' => 'image/x-icon',
        'href' => '../favicon.ico',
]);

?>
<div class="newsblog-view">

        <div class="row">
            <div class="col-lg-4">
                <h2><?= Html::encode($model->title) ?></h2>

                <p><?= Html::encode($model->txt) ?></p>
        </div>

</div>
