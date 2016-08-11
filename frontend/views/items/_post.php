<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

$items_names = $model['item_photo'];
$items_names = explode(",", $items_names);
$img = '@back/uploads/' . $model->id . '/' . $items_names[0];
?>
<div class="col-md-4">  
    <div class="item post ">
        <div class="effect eff-10-3">
        <?= Html::img($img, ['class' => 'pull-left img-responsive']); ?>
        </div>
        <p>Модель: <?= Html::encode($model->code); ?></p>
            <ul>
              <li>Тип: <?= Html::encode($model->name); ?></li>
              <li>Цена: <?= Html::encode($model->price); ?></li>
            </ul>
        <button class="btn btn-default">
            <a href="/advanced/items/view?id=<?= Html::encode($model->id)?>">Подробнее</a>
        </button>
        <!--<button class="btn btn-default" data-toggle="modal" data-target="#myModal" data-content="<?= Html::encode($model->code)?>">
            Заказать
        </button>-->
    </div>
</div>
