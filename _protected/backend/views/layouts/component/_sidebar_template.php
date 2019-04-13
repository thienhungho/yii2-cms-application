<!-- Template -->
<?php
if (is_role(['admin', 'manager'])) {
    ?>
    <li class="heading">
        <h3 class="uppercase"><?= t('app', 'Template') ?></h3>
    </li>
    <li class="nav-item  ">
        <a href="<?= url(['/block-manage/block']) ?>" class="nav-link nav-toggle"> <i class="icon-layers"></i>
            <span class="title"><?= t('app', 'Block') ?></span> <span class="arrow"></span> </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="<?= url(['/block-manage/block']) ?>" class="nav-link ">
                    <i class="icon-layers"></i> <span class="title"><?= t('app', 'All') ?> <?= t('app', 'Blocks') ?></span> </a>
            </li>
            <li class="nav-item  ">
                <a href="<?= url(['/block-manage/block/create']) ?>" class="nav-link ">
                    <i class="icon-plus"></i> <span class="title"><?= t('app', 'Create') ?> <?= t('app', 'Blocks') ?></span> </a>
            </li>
        </ul>
    </li>
    <li class="nav-item  ">
        <a href="javascript:;" class="nav-link nav-toggle"> <i class="icon-magic-wand"></i>
            <span class="title"><?= t('app', 'Advance') ?></span> <span class="arrow"></span> </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="<?= url(['/template-configuration/custom-css']) ?>" class="nav-link ">
                    <i class="icon-drop"></i> <span class="title"><?= t('app', 'Custom CSS') ?></span> </a>
            </li>
            <li class="nav-item  ">
                <a href="<?= url(['/template-configuration/custom-script']) ?>" class="nav-link ">
                    <i class="icon-drop"></i> <span class="title"><?= t('app', 'Custom Script') ?></span> </a>
            </li>
        </ul>
    </li>
    <?php
} ?>