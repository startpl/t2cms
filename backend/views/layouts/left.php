<aside class="main-sidebar">

    <section class="sidebar">
        
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?=\Yii::$app->user->identity->username?></p>

                <a>
                    <i class="fa fa-group"></i> 
                    <?=array_shift(\Yii::$app->authManager->getRolesByUser(\Yii::$app->user->getId()))->description?>
                </a>
            </div>
        </div>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => \Yii::t('app', 'Admin menu'), 'options' => ['class' => 'header']],
                    [
                        'label' => \Yii::t('app', 'Blog'), 'icon' => 'list', 'items' => [
                            ['label' => \Yii::t('app', 'Categories'), 'icon' => 'list', 'url' => ['/blog']],
                            [
                                'label' => \Yii::t('app', 'Pages'), 
                                'icon' => 'list', 
                                'url' => ['/blog/pages'],
                                'active' => (
                                    \Yii::$app->controller->module->id === 'blog' && \Yii::$app->controller->id === 'pages'
                                )
                            ]
                        ]
                    ],
                    ['label' => \Yii::t('app', 'Menu'), 'icon' => 'link', 'url' => ['/menu']],
                    [
                        'label' => \Yii::t('app', 'Modules'), 
                        'icon' => 'puzzle-piece', 
                        'items' => array_merge(
                            [[
                                'label' => \Yii::t('app', 'Modules'), 
                                'icon' => 'puzzle-piece', 
                                'url' => ['/module'],
                            ]],
                            \t2cms\module\services\ModuleMenuFacade::getModulesToMenu()
                        )
                    ],
                    ['label' => \Yii::t('app', 'Design'), 'icon' => 'magic', 'url' => ['/design']],
                    ['label' => \Yii::t('app', 'Users'), 'icon' => 'address-book', 'items' => [
                        ['label' => \Yii::t('app', 'Users'), 'icon' => 'list', 'url' => ['/user']],
                        ['label' => \Yii::t('app', 'Groups'), 'icon' => 'list', 'url' => ['/user/roles']],
                        ['label' => \Yii::t('app', 'Permissions'), 'icon' => 'list', 'url' => ['/user/permissions']]
                    ]],
                    ['label' => \Yii::t('app', 'Site Management'), 'icon' => 'gears', 'items' => [
                        ['label' => \Yii::t('app', 'General Settings'), 'icon' => 'gear', 'url' => ['/manager']],
                        ['label' => \Yii::t('app', 'Domains'), 'icon' => 'list', 'url' => ['/manager/domains']],
                        ['label' => \Yii::t('app', 'Languages'), 'icon' => 'list', 'url' => ['/manager/languages']]
                    ]],
                    ['label' => \Yii::t('app', 'Cache flush'), 'icon' => 'refresh', 'url' => ['/site/cache-flush'], 
                        'options' => ['class' => 'cache__link-flush']]
                ],
            ]
        ) ?>

    </section>

</aside>
