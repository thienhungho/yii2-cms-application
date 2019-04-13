<!-- Interactive -->
<?php
if (is_role(['admin', 'manager'])) {
    ?>
    <li class="heading">
        <h3 class="uppercase"><?= t('app', 'Interactive') ?></h3>
    </li>
    <li class="nav-item  ">
        <a href="<?= url(['/comment-manage/comment', 'type' => 'post-comment',]) ?>" class="nav-link nav-toggle"> <i class="icon-bubbles"></i>
            <span class="title"><?= t('app', 'Comment') ?></span> <span class="arrow"></span> </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="<?= url(['/comment-manage/comment', 'type' => 'post-comment',]) ?>" class="nav-link "><i class="icon-bubbles"></i> <span class="title"><?= t('app', 'Post Comment') ?></span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="<?= url([
                    '/comment-manage/comment',
                    'type' => 'portfolio-comment',
                ]) ?>" class="nav-link ">
                    <i class="icon-bubbles"></i> <span class="title"><?= t('app', 'Portfolio Comment') ?></span> </a>
            </li>
            <?php
            $postTypes = \thienhungho\PostManagement\modules\PostBase\PostType::find()->where(['!=', 'name', 'post'])->andWhere(['!=', 'name', 'portfolio'])->andWhere(['!=', 'name', 'page'])->all();
            foreach ($postTypes as $postType) {
                $name = slug_to_text($postType->name); ?>
                <li class="nav-item  ">
                    <a href="<?= url(['/comment-manage/comment', 'type' => $postType->name . '-comment']) ?>" class="nav-link "><i class="icon-bubbles"></i> <span class="title"><?= t('app', $name . ' Comment') ?></span>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </li>
    <li class="nav-item  ">
        <a href="<?= url(['/contact-manage/contact',]) ?>" class="nav-link nav-toggle"> <i class="icon-envelope-open"></i>
            <span class="title"><?= t('app', 'Contact') ?></span> <span class="arrow"></span> </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="<?= url(['/contact-manage/contact',]) ?>" class="nav-link "><i class="icon-envelope-open"></i> <span class="title"><?= t('app', 'All') ?> <?= t('app', 'Contact') ?></span> </a>
            </li>
        </ul>
    </li>
    <li class="nav-item  ">
        <a href="<?= url(['/subscribe-manage/subscribe']) ?>" class="nav-link nav-toggle"> <i class="icon-bell"></i>
            <span class="title"><?= t('app', 'Subscribe') ?></span> <span class="arrow"></span> </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="<?= url(['/subscribe-manage/subscribe']) ?>" class="nav-link "><i class="icon-bell"></i> <span class="title"><?= t('app', 'All') ?> <?= t('app', 'Subscribers') ?></span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item  ">
        <a href="<?= url(['/mail-transport-manage/mail-transport']) ?>" class="nav-link nav-toggle"> <i class="icon-envelope-open"></i>
            <span class="title"><?= t('app', 'Mail Transport') ?></span> <span class="arrow"></span> </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="<?= url(['/mail-transport-manage/mail-transport']) ?>" class="nav-link "><i class="icon-envelope-open"></i> <span class="title"><?= t('app', 'All') ?> <?= t('app', 'Mail Transport') ?></span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="<?= url(['/mail-transport-manage/mail-transport/create']) ?>" class="nav-link "><i class="icon-plus"></i> <span class="title"><?= t('app', 'Create Mail Transport') ?></span>
                </a>
            </li>
        </ul>
    </li>
    <?php
}
?>