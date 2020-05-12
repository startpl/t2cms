<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Resend verification email';

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
        <p>Please fill out your email. A verification email will be sent there.</p>
        <?php $form = ActiveForm::begin(['id' => 'resend-verification-email-form', 'enableClientValidation' => false]); ?>
        
        <?= $form
            ->field($model, 'email', $fieldOptions1)
            ->label(false)
            ->textInput(['placeholder' => 'email']) ?>
        
        <?= Html::submitButton('Send', ['class' => 'btn btn-primary btn-block btn-flat']) ?>
        
        <?php ActiveForm::end(); ?>
    </div>
</div>
