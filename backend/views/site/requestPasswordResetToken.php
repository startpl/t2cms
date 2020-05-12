<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Request password reset';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];
?>
<div class="login-box">
    <div class="login-logo">
        <a><?= Html::encode($this->title) ?></a>
    </div>
    
    <div class="login-box-body">
        <p>Please fill out your email. A verification token will be sent there.</p>
        <?php $form = ActiveForm::begin(['id' => 'password-reset-token', 'enableClientValidation' => false]); ?>
        
        <?= $form
            ->field($model, 'email', $fieldOptions1)
            ->label(false)
            ->textInput(['placeholder' => 'email']) ?>
        
        <?= Html::submitButton('Send', ['class' => 'btn btn-primary btn-block btn-flat']) ?>
        
        <?php ActiveForm::end(); ?>
    </div>
</div>