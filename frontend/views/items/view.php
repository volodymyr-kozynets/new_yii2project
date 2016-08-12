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

$this->title = $model->name . ' ' . $model->code;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$items_names = $model['item_photo'];
$items_names = explode(",", $items_names);
$img_folder = '@back/uploads/' . $model->id;
?>

<div class="items-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <div> 
    <?php foreach($items_names as $names) { ?>
    
    <?= Html::img($img_folder . '/' . $names, ['class' => 'pull-left img-responsive']); ?>

    <?php  } ?>
    </div>
    <div class="clearfix">

    <button class="btn btn-default" style="margin: 2%;" data-toggle="modal" data-target="#myModal" data-content="<?= Html::encode('ID'.$model->id .', '. $model->code .', '. $model->name .', Цена:'. $model->price) . 'грн'?>">
        Заказать
    </button>

    </div>
       
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'code:ntext:Код',
            'name:ntext:Тип',
            'description:ntext:Описание',
            'price:ntext:Цена',
        ],
    ]) ?>

</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="php/subscribe_order.php" name="subscribeform">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title text-center" id="myModalLabel">Подтверждение заказа</h4>
            </div>
            <div class="modal-body">

            <div>Вы хотите заказать</div>
            <textarea name="item_ordered" id="content"></textarea><br/>
            <input type="email" name="email" placeholder="Введите адрес электронной почты" />
            ЛИБО
            <input type="text" name="phone" placeholder="Введите номер телефона" id="subphone" /><br/>
            <p>Введите пожалуйста адрес електронной почты ЛИБО номер телефона что бы мы могли с вами связаться</p>


            </div>
              <div class="modal-footer">
                <div class="btn-group">
                  <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>Отменить</button>
                  <button type="submit" class="btn btn-default"><i class="fa fa-check" aria-hidden="true"></i>Подтвердить</button>
                </div>
              </div>
        </form>
    </div>
  </div>
</div>