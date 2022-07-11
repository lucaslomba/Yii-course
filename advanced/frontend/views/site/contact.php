<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('../img/home-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Contact</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="container">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
        </p>

        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <!-- 
                    options is:
                      ->radio()
                      ->label('new text')
                      ->label(false)
                      ->checkbox()
                      ->dropDownList(['value1'=>'display1', 'value2'=>'display2', ...])
                      ->dropDownList(['value1'=>'display1', 'value2'=>'display2', ...], ['prompt'=>''Select])
                    -->

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label('Full name') ?>

                    <?= $form->field($model, 'email')->textInput([]) ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
