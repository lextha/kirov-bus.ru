<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?=Yii::$app->user->getIdentity()['username'];?></p>

                <? /*<a href="#"><i class="fa fa-circle text-success"></i> Online</a> */?>
            </div>
        </div>
<?/*
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
*/?>
         <?
          if (Yii::$app->user->can('admin')) {
            echo dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                    'items' => [
                        ['label' => 'Меню', 'options' => ['class' => 'header']],
                        ['label' => 'Маршруты', 'icon' => 'bus', 'url' => ['route/index']],
                        ['label' => 'Города', 'icon' => 'building-o', 'url' => ['city/index']],
                        ['label' => 'Остановки', 'icon' => 'map-pin','url' => ['station/index']],
                        ['label' => 'Правки', 'icon' => 'server','url' => ['routestep/index']],

                        ['label' => 'Сообщения', 'icon' => 'envelope','url' => ['routemessages/index']],

                        ['label' => 'СуперАдмин', 'options' => ['class' => 'header']],
                        ['label' => 'User', 'icon' => 'user', 'url' => ['/user']],
                        ['label' => 'Gii', 'icon' => 'info', 'url' => ['/gii']],

                    ],
                ]
              ); 
            
          } else {
                echo dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                    'items' => [
                        ['label' => 'Меню', 'options' => ['class' => 'header']],
                        ['label' => 'Маршруты', 'icon' => 'bus', 'url' => ['route/index']],
                        ['label' => 'Города', 'icon' => 'building-o', 'url' => ['city/index']],
                        ['label' => 'Остановки', 'icon' => 'map-pin','url' => ['station/index']],
                        ['label' => 'Правки', 'icon' => 'server','url' => ['routestep/index']],

                        ['label' => 'Сообщения', 'icon' => 'envelope','url' => ['routemessages/index']],

                    ],
                ]
              ); 
          } ?>
        
        <?/* dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) */?>

    </section>

</aside>
