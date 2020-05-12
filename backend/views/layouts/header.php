<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">T2</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <div class="zone-section">
                <div class="domain-change">
                    <?= t2cms\sitemanager\widgets\absolute\DomainList::widget();?>
                </div>
                <div class="language-change">
                    <?= \t2cms\sitemanager\widgets\absolute\LanguageList::widget();?>
                </div>
            </div>
            <div class="cache-flush">
                <?= Html::a(rmrevin\yii\fontawesome\FontAwesome::icon('refresh'), ['/site/cache-flush'], [
                    'class' => 'cache__link-flush'
                ]);?>
            </div>
        </div>
    </nav>
</header>
