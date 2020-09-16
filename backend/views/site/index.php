<?php

/* @var $this yii\web\View */

$this->title = 'My T2cms application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Dashboard</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>
        <div>
            Подмена переменных настроек в строке:
            <code>
                \t2cms\meta\Meta::t('Main city is - [[city]]')
            </code>
            <br/>
            Получение элементов меню:
            <code>
                \t2cms\menu\services\nestedSets\MenuArray::getItems('top_menu')
                где top_menu - имя меню
            </code>
            <br/>
            <div>Blog Helpers смотреть в <code>@vendor/startpl/t2cms-blog</code></div>
            <div>ACF Helpers смотреть в <code>cms/modules/t2cms-acf</code></div>
            
            <p>Вся система построенна на слоях Service -> Repository</p>
            
        </div>
    </div>
</div>
