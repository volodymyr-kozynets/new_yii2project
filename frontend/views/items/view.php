<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Items */

$this->registerLinkTag([
        'rel' => 'shortcut icon',
        'type' => 'image/x-icon',
        'href' => '../favicon.ico',
]);

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$items_names = $model['item_photo'];
$items_names = explode(",", $items_names);
$img_folder = '@back/uploads/' . $model->id;
?>

<div class="items-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php foreach($items_names as $names) { ?>
    
    <?= Html::img($img_folder . '/' . $names, ['class' => 'pull-left img-responsive']); ?>
    
    <?php  } ?>
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'code:ntext',
            'name:ntext',
            'description:ntext',
            'price',
        ],
    ]) ?>

</div>
