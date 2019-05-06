<!-- Media -->
<?php
if (is_role(['admin', 'manager'])) {
    ?>
    <li class="heading">
        <h3 class="uppercase"><?= t('app', 'Media') ?></h3>
    </li>
    <li class="nav-item  ">
        <a href="<?= url(['/media-manage/media']) ?>" class="nav-link nav-toggle"> <i class="icon-picture"></i>
            <span class="title"><?= t('app', 'Media') ?></span> <span class="arrow"></span> </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="<?= url(['/media-manage/media']) ?>" class="nav-link ">
                    <i class="icon-picture"></i> <span class="title"><?= t('app', 'All') ?> <?= t('app', 'Image') ?></span> </a>
            </li>
            <li class="nav-item  ">
                <a href="<?= url(['/media-manage/media/create']) ?>" class="nav-link ">
                    <i class="icon-plus"></i> <span class="title"><?= t('app', 'Create') ?> <?= t('app', 'Image') ?></span> </a>
            </li>
            <li class="nav-item  ">
                <a href="<?= url(['/media-configuration/media']) ?>" class="nav-link ">
                    <i class="icon-settings"></i> <span class="title"><?= t('app', 'Settings') ?></span> </a>
            </li>
        </ul>
    </li>
    <?php
} ?>