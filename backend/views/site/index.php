<?php

/* @var $this yii\web\View */

$this->title = 'My T2cms application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Dashboard</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>
        <div>
            <?php           
                $model = startpl\t2cmsblog\helpers\CategoryHelper::get(2);
//                debug(\startpl\t2cms\acf\helpers\ACF::getFields($model))?>
            <?php debug(
 \t2cms\meta\Meta::t('[[city]] was beautiful, but [[robots]] was empty :c')
            );?>
            <?= \startpl\yii2NestedSetsMenu\Menu::widget([
                'items' => \t2cms\menu\services\nestedSets\MenuArray::getItems('top_menu'),
                'options' => ['id'=>'top-menu', 'class' => 'top_menu'],
                'encodeLabels'=>false,
                'activateParents'=>true,
                'activeCssClass'=>'active',
            ]);?>
        </div>
    </div>
</div>
