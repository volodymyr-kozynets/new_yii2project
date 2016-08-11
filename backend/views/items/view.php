<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Items */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$items_names = $model['item_photo'];
$items_names = explode(",", $items_names);
$img_folder = '@web/uploads/' . $model->id;

?>
<div class="items-view">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php foreach($items_names as $names) { ?>
    
    <?= Html::img($img_folder . '/' . $names, ['class' => 'pull-left img-responsive']); ?>
    
    <?php  } ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'code:ntext',
            'name:ntext',
            'description:ntext',
            'price',
            'item_photo',
        ],
    ]) ?>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить этот товар?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
