<?php
if (is_role([
    'admin',
    'manager',
])) {
    ?>
    <li class="heading">
        <h3 class="uppercase"><?= t('app', 'Term') ?></h3>
    </li>
    <li class="nav-item  ">
        <a href="javascript:;" class="nav-link nav-toggle"> <i class="icon-tag"></i>
            <span class="title"><?= t('app', 'Term') ?></span> <span class="arrow"></span> </a>
        <ul class="sub-menu">
            <?php
            $termTypes = \thienhungho\TermManagement\modules\TermBase\TermType::find()->all();
            foreach ($termTypes as $termType) { ?>
                <li class="nav-item  ">
                    <a href="<?= url([
                        '/term-manage/term',
                        'slug' => $termType->slug,
                    ]) ?>" class="nav-link "> <i class="icon-tag"></i>
                        <span class="title"><?= t('app', 'All') ?> <?= t('app', $termType->name) ?></span>
                    </a>
                </li>
            <?php }
            ?>
        </ul>
    </li>
    <li class="nav-item  ">
        <a href="javascript:;" class="nav-link nav-toggle"> <i class="icon-tag"></i>
            <span class="title"><?= t('app', 'Term Type') ?></span> <span class="arrow"></span> </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="<?= url(['/term-manage/term-type']) ?>" class="nav-link ">
                    <i class="icon-tag"></i>
                    <span class="title"><?= t('app', 'All') ?> <?= t('app', 'Term Type') ?></span> </a>
            </li>
            <li class="nav-item  ">
                <a href="<?= url(['/term-manage/term-type/create']) ?>" class="nav-link ">
                    <i class="icon-plus"></i>
                    <span class="title"><?= t('app', 'Create') ?> <?= t('app', 'Term Type') ?></span> </a>
            </li>
        </ul>
    </li>
    <?php
}