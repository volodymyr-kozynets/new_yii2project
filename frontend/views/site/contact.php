<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->registerLinkTag([
        'rel' => 'shortcut icon',
        'type' => 'image/x-icon',
        'href' => '../favicon.ico',
]);

$this->title = 'Связаться с нами';
//$this->params['breadcrumbs'][] = $this->title;
?>
<section id="subscribe" class="subscribe">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-5 subscribe-title">
        <h2>Отправьте нам свой e-mail и подпишитесь на новости об акциях и новых поступлениях обуви</h2>
      </div>
      
      <!-- subscribe form -->
      <div class="col-sm-12 col-md-7 subscribe-form"> 
               


            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput()->hint('Введите имя')->label(' '); ?>
                <br/>
                <?= $form->field($model, 'email')->hint('Введите e-mail')->label(' '); ?>
                <br/>
                <?= $form->field($model, 'verifyCode')->hint('Введите код с картинки')->label('Антиспам')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-default', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
        
        <!-- subscribe message -->
        <div id="mesaj"></div>
        <!-- subscribe message --> 
      </div>
      <!-- subscribe form --> 
    </div>
  </div>
</section>
