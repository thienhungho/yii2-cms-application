<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu" data-keep-expanded="false" data-auto-scroll="false" data-slide-speed="200">
            <li class="heading">
                <h3 class="uppercase"><?= t('app', 'Links') ?></h3>
            </li>
            <li class="nav-item">
                <a href="/" class="nav-link" target="_blank"> <i class="icon-home"></i>
                    <span class="title"><?= t('app', 'Home Page') ?></span> <span class="selected"></span></a>
            </li>
            <li class="nav-item">
                <a href="<?= url(['/site/index']) ?>" class="nav-link"> <i class="icon-bar-chart"></i>
                    <span class="title"><?= t('app', 'Dashboard') ?></span> <span class="selected"></span></a>
            </li>
            <?= $this->render('_sidebar_content') ?>
            <?= $this->render('_sidebar_interactive') ?>
            <?= $this->render('_sidebar_ecommerce') ?>
            <?= $this->render('_sidebar_media') ?>
            <!-- Term -->
            <?= $this->render('_sidebar_term') ?>
            <?= $this->render('_sidebar_template') ?>
            <?= $this->render('_sidebar_plugin') ?>
            <?= $this->render('_sidebar_seo') ?>
            <?= $this->render('_sidebar_system') ?>
            <!-- Dev -->
            <?php
            if (is_role(['admin'])) {
                ?>
                <li class="heading">
                    <h3 class="uppercase"><?= t('app', 'Dev') ?></h3>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle"> <i class="icon-settings"></i>
                        <span class="title"><?= t('app', 'Settings') ?></span> <span class="arrow"></span> </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?= url(['/dev-configuration/general']) ?>" class="nav-link ">
                                <i class="icon-settings"></i> <span class="title"><?= t('app', 'General') ?></span> </a>
                        </li>
                    </ul>
                </li>
                <?php
            }
            ?>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>