<!-- System -->
<?php
if (is_role(['admin', 'manager'])) {
    ?>
    <li class="heading">
        <h3 class="uppercase"><?= t('app', 'Systems') ?></h3>
    </li>
    <?php
    if (is_role(['admin', 'manager'])) {
        ?>
        <li class="nav-item  ">
            <a href="<?= url(['/user-manage/user']) ?>" class="nav-link nav-toggle"> <i class="icon-user"></i>
                <span class="title"><?= t('app', 'User') ?></span> <span class="arrow"></span> </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="<?= url(['/user-manage/user']) ?>" class="nav-link ">
                        <i class="icon-user"></i> <span class="title"><?= t('app', 'All User') ?></span> </a>
                </li>
                <li class="nav-item  ">
                    <a href="<?= url(['/user-manage/user']) ?>" class="nav-link ">
                        <i class="icon-plus"></i> <span class="title"><?= t('app', 'Create') ?> <?= t('app', 'User') ?></span> </a>
                </li>
                <?php
                if (is_role(['admin'])) { ?>
                    <li class="nav-item  ">
                        <a href="<?= url(['/user-manage/auth']) ?>" class="nav-link ">
                            <i class="icon-moustache"></i> <span class="title"><?= t('app', 'Roles') ?></span> </a>
                    </li>
                <?php } ?>
            </ul>
        </li>
        <?php
    }
    ?>
    <li class="nav-item  ">
        <a href="javascript:;" class="nav-link nav-toggle"> <i class="icon-settings"></i>
            <span class="title"><?= t('app', 'Settings') ?></span> <span class="arrow"></span> </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="<?= url(['/site-configuration/site-identity']) ?>" class="nav-link ">
                    <i class="icon-screen-desktop"></i> <span class="title"><?= t('app', 'Site Identity') ?></span> </a>
            </li>
            <?php
            if (is_role('admin')) {
                ?>
                <li class="nav-item  ">
                    <a href="<?= url(['/site-configuration/language']) ?>" class="nav-link ">
                        <i class="icon-globe"></i> <span class="title"><?= t('app', 'Language') ?></span> </a>
                </li>
                <li class="nav-item  ">
                    <a href="<?= url(['/site-configuration/site-status']) ?>" class="nav-link ">
                        <i class="icon-chemistry"></i> <span class="title"><?= t('app', 'Site Status') ?></span> </a>
                </li>
                <?php
            }
            ?>
            <li class="nav-item  ">
                <a href="<?= url(['/site-configuration/mailer']) ?>" class="nav-link ">
                    <i class="icon-envelope-open"></i> <span class="title"><?= t('app', 'Mailer') ?></span> </a>
            </li>
            <li class="nav-item  ">
                <a href="<?= url(['/site-configuration/change-log']) ?>" class="nav-link ">
                    <i class="icon-info"></i> <span class="title"><?= t('app', 'Change log') ?></span> </a>
            </li>
        </ul>
    </li>
    <?php
    if (is_role(['admin', 'manager'])) {
        ?>
        <li class="nav-item  ">
            <a href="<?= url(['/optimize-configuration/view']) ?>" class="nav-link nav-toggle"> <i class="icon-rocket"></i>
                <span class="title"><?= t('app', 'Optimize') ?></span> <span class="arrow"></span> </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="<?= url(['/optimize-configuration/view']) ?>" class="nav-link ">
                        <i class="icon-screen-desktop"></i> <span class="title"><?= t('app', 'View') ?></span> </a>
                </li>
                <li class="nav-item  ">
                    <a href="<?= url(['/../../site/flush-cache']) ?>" class="nav-link " target="_blank">
                        <i class="icon-fire"></i> <span class="title"><?= t('app', 'Flush Cache') ?></span> </a>
                </li>
            </ul>
        </li>
        <?php
    }
    ?>
    <?php
}
?>