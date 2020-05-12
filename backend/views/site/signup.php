<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Sign Up';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>

<div class="login-box">
    <div class="login-logo">
        <a><?= Html::encode($this->title) ?></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">

        <p>Please fill out the following fields to signup:</p>
        
        <?php $form = ActiveForm::begin(['id' => 'signup-form', 'enableClientValidation' => false]); ?>

        <?= $form->field($model, 'username', $fieldOptions3)
        ->label(false)
        ->textInput(['autofocus' => true]) ?>

        <?= $form
        ->field($model, 'email', $fieldOptions1)
        ->label(false)
        ->textInput(['placeholder' => 'email']) ?>

        <?= $form
        ->field($model, 'password', $fieldOptions2)
        ->label(false)
        ->passwordInput() ?>

        <?= Html::submitButton('Sign Up', ['class' => 'btn btn-primary btn-block btn-flat']) ?>


        <?php ActiveForm::end(); ?>

        <a href="<?=\yii\helpers\Url::to(['/reset-password'])?>"><?=\Yii::t('app', 'I forgot my password')?></a><br>

    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->