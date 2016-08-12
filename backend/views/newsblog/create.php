<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Newsblog */

$this->title = 'Create Newsblog';
$this->params['breadcrumbs'][] = ['label' => 'Newsblogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newsblog-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
