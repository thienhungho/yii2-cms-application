<!-- Plugin -->
<?php
if (is_role(['admin'])) {
    ?>
    <li class="heading">
        <h3 class="uppercase"><?= t('app', 'Plugin') ?></h3>
    </li>
    <li class="nav-item  ">
        <a href="<?= url(['/plugin-configuration/plugin']) ?>" class="nav-link nav-toggle"> <i class="icon-settings"></i>
            <span class="title"><?= t('app', 'Settings') ?></span> <span class="arrow"></span> </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="<?= url(['/plugin-configuration/plugin']) ?>" class="nav-link ">
                    <i class="icon-puzzle"></i> <span class="title"><?= t('app', 'Plugin') ?></span> </a>
            </li>
        </ul>
    </li>
    <?php
}
?>