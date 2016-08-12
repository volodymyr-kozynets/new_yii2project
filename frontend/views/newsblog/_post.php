<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

?>
<div class="col-lg-4"> 
    <div class="item-post post">
        <p><?= Html::encode($model->title); ?></p>
            <p>
              <?= Html::encode($model->txt); ?>
            </p>
        
        <a class="psevdo-btn" href="/advanced/newsblog/view?id=<?= Html::encode($model->id)?>">ПОДРОБНЕЕ</a>
        
        <!--<button class="btn btn-default" data-toggle="modal" data-target="#myModal" data-content="<?php //Html::encode($model->code)?>">
            Заказать
        </button>-->
    </div>
</div>
