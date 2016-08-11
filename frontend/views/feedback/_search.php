<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\FeedbackSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="feedback-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'feedback_time') ?>

    <?= $form->field($model, 'feedback_name') ?>

    <?= $form->field($model, 'feedback_description') ?>

    <?= $form->field($model, 'feedback_photo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
