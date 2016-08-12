<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use frontend\models\Items;
use frontend\models\ItemsSearch;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ItemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->registerLinkTag([
        'rel' => 'shortcut icon',
        'type' => 'image/x-icon',
        'href' => '../favicon.ico',
]);

$this->title = 'Каталог';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-index">
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>
    
<section id="pricelist" class="pricelist">
    <div class="container">
        <div class="row text-center">
             
                <?php 
                    $dataProvider = new ActiveDataProvider([
                        'query' => Items::find()->orderBy('id DESC'),
                    ]);
                    echo ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_post',
                    ]);
                ?>
            
        </div>
    </div>
</section>
    
</div>
