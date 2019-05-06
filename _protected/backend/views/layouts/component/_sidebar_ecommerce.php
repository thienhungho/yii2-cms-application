<?php
if (is_enabled_plugin('e_commerce_status') && is_role([
        'admin',
        'manager',
    ])) {
    ?>
    <li class="heading">
        <h3 class="uppercase"><?= t('app', 'E-Commerce') ?></h3>
    </li>
    <?php
    $productTypes = \thienhungho\ProductManagement\models\ProductType::find()->where([
        '!=',
        'name',
        'coin',
    ])->all();
    foreach ($productTypes as $productType) { ?>
        <li class="nav-item  ">
            <a href="<?= url([
                '/product-manage/product',
                'slug' => $productType->slug,
            ]) ?>" class="nav-link nav-toggle"> <i class="icon-basket"></i>
                <span class="title"><?= t('app', $productType->name) ?></span>
                <span class="arrow"></span> </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="<?= url([
                        '/product-manage/product',
                        'slug' => $productType->slug,
                    ]) ?>" class="nav-link "> <i class="icon-basket"></i>
                        <span class="title"><?= t('app', 'All') ?> <?= t('app', $productType->name) ?></span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="<?= url([
                        '/product-manage/product/create',
                        'slug' => $productType->slug,
                    ]) ?>" class="nav-link "> <i class="icon-plus"></i>
                        <span class="title"><?= t('app', 'Create') ?> <?= t('app', $productType->name) ?></span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="<?= url([
                        '/comment-manage/comment',
                        'type' => $productType->slug . '-comment',
                    ]) ?>" class="nav-link "> <i class="icon-bubbles"></i>
                        <span class="title"><?= t('app', $productType->name) ?> <?= t('app', 'comment') ?></span>
                    </a>
                </li>
                <?php
                if (is_role([
                    'admin',
                    'dev',
                ])) { ?>
                    <li class="nav-item  ">
                        <a href="<?= url([
                            '/product-manage/term-of-product-type',
                            'type' => $productType->name,
                        ]) ?>" class="nav-link "> <i class="icon-tag"></i>
                            <span class="title"><?= t('app', 'Term Of') ?> <?= t('app', $productType->name) ?></span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="<?= url([
                            '/product-manage/product-type-meta',
                            'type' => $productType->name,
                        ]) ?>" class="nav-link "> <i class="icon-tag"></i>
                            <span class="title"><?= t('app', 'Meta Of') ?> <?= t('app', $productType->name) ?></span>
                        </a>
                    </li>
                <?php }
                ?>
            </ul>
        </li>
    <?php }
    ?><?php
    if (is_role([
        'admin',
        'dev',
    ])) { ?>
        <li class="nav-item  ">
            <a href="<?= url(['/product-manage/product-type']) ?>" class="nav-link nav-toggle">
                <i class="icon-basket"></i> <span class="title"><?= t('app', 'Product Type') ?></span>
                <span class="arrow"></span> </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="<?= url(['/product-manage/product-type']) ?>" class="nav-link ">
                        <i class="icon-basket"></i>
                        <span class="title"><?= t('app', 'All') ?> <?= t('app', 'Product Type') ?></span> </a>
                </li>
                <li class="nav-item  ">
                    <a href="<?= url(['/product-manage/product-type/create']) ?>" class="nav-link ">
                        <i class="icon-plus"></i>
                        <span class="title"><?= t('app', 'Create') ?> <?= t('app', 'Product Type') ?></span> </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="<?= url(['/product-manage/product-unit']) ?>" class="nav-link nav-toggle">
                <i class="icon-social-dropbox"></i> <span class="title"><?= t('app', 'Product Unit') ?></span>
                <span class="arrow"></span> </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="<?= url(['/product-manage/product-unit']) ?>" class="nav-link ">
                        <i class="icon-social-dropbox"></i>
                        <span class="title"><?= t('app', 'All') ?> <?= t('app', 'Product Unit') ?></span> </a>
                </li>
                <li class="nav-item  ">
                    <a href="<?= url(['/product-manage/product-unit/create']) ?>" class="nav-link ">
                        <i class="icon-plus"></i>
                        <span class="title"><?= t('app', 'Create') ?> <?= t('app', 'Product Unit') ?></span> </a>
                </li>
                <li class="nav-item  ">
                    <a href="<?= url(['/product-manage/product-unit-equivalent']) ?>" class="nav-link ">
                        <i class="icon-social-dropbox"></i>
                        <span class="title"><?= t('app', 'Product Unit Equivalent') ?></span> </a>
                </li>
            </ul>
        </li>
    <?php }
    ?>
    <li class="nav-item  ">
        <a href="<?= url(['/order-manage/order']) ?>" class="nav-link nav-toggle">
            <i class="icon-bag"></i> <span class="title"><?= t('app', 'Orders') ?></span> <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="<?= url(['/order-manage/order']) ?>" class="nav-link ">
                    <i class="icon-bag"></i>
                    <span class="title"><?= t('app', 'All') ?> <?= t('app', 'Order') ?></span> </a>
            </li>
        </ul>
    </li>
    <?php
}