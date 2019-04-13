<?php
if (is_role(['admin', 'manager'])) {
    ?>
    <li class="heading">
        <h3 class="uppercase"><?= t('app', 'Content') ?></h3>
    </li>
    <?php
    $postTypes = get_all_post_type();
    foreach ($postTypes as $postType) { ?>
        <li class="nav-item  ">
            <a href="<?= url(['/post-manage/post', 'type' => $postType->name,]) ?>" class="nav-link nav-toggle"> <i class="icon-docs"></i>
                <span class="title"><?= t('app', slug_to_text($postType->name)) ?></span> <span class="arrow"></span> </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="<?= url([
                        '/post-manage/post',
                        'type' => $postType->name,
                    ]) ?>" class="nav-link "> <i class="icon-docs"></i>
                        <span class="title"><?= t('app', 'All') ?> <?= t('app', slug_to_text($postType->name)) ?></span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="<?= url([
                        '/post-manage/post/create',
                        'type' => $postType->name,
                    ]) ?>" class="nav-link "> <i class="icon-plus"></i>
                        <span class="title"><?= t('app', 'Create') ?> <?= t('app', slug_to_text($postType->name)) ?></span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="<?= url([
                        '/comment-manage/comment',
                        'type' => $postType->name . '-comment',
                    ]) ?>" class="nav-link ">
                        <i class="icon-bubbles"></i> <span class="title"><?= t('app',  slug_to_text($postType->name)) ?> <?= t('app',  'comment') ?></span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="<?= url([
                        '/post-manage/term-of-post-type',
                        'type' => $postType->name,
                    ]) ?>" class="nav-link ">
                        <i class="icon-tag"></i> <span class="title"><?= t('app', 'Term Of')?> <?= t('app',  slug_to_text($postType->name)) ?></span>
                    </a>
                </li>
            </ul>
        </li>
    <?php }

    if (is_role(['admin', 'dev'])) { ?>
        <li class="nav-item  ">
            <a href="<?= url(['/post-manage/post-type']) ?>" class="nav-link nav-toggle"> <i class="icon-docs"></i>
                <span class="title"><?= t('app', 'Content Type') ?></span> <span class="arrow"></span> </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="<?= url(['/post-manage/post-type']) ?>" class="nav-link ">
                        <i class="icon-docs"></i>
                        <span class="title"><?= t('app', 'All') ?> <?= t('app', 'Content Type') ?></span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="<?= url(['/post-manage/post-type/create']) ?>" class="nav-link ">
                        <i class="icon-plus"></i>
                        <span class="title"><?= t('app', 'Create') ?> <?= t('app', 'Content Type') ?></span>
                    </a>
                </li>
            </ul>
        </li>
    <?php }
}
?>