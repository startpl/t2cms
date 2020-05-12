<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Reset password';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>
<div class="login-box">
    <div class="login-logo">
        <a><?= Html::encode($this->title) ?></a>
    </div>
    
    <div class="login-box-body">
        <p>Please choose your new password:</p>
        <?php $form = ActiveForm::begin(['id' => 'reset-password-form', 'enableClientValidation' => false]); ?>
        
        <?= $form
            ->field($model, 'password', $fieldOptions1)
            ->label(false)
            ->textInput(['placeholder' => 'password']) ?>
        
        <?= Html::submitButton('Send', ['class' => 'btn btn-primary btn-block btn-flat']) ?>
        
        <?php ActiveForm::end(); ?>
    </div>
</div>