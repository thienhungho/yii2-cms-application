<!-- BEGIN PAGE ACTIONS -->
<!-- DOC: Remove "hide" class to enable the page header actions -->
<div class="page-actions">
    <div class="btn-group">
        <button type="button" class="btn red-haze btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <span class="hidden-sm hidden-xs"><?= t('app', 'Actions') ?>&nbsp;</span>
            <i class="fa fa-angle-down"></i>
        </button>
        <ul class="dropdown-menu" role="menu">
            <?php
            if (is_role(['admin', 'manager'])) {
                ?>
                <li>
                    <a href="<?= url([
                        '/post-manage/post/create',
                        'type' => 'post',
                    ]) ?>"> <i class="icon-docs"></i> <?= t('app', 'New Post') ?> </a>
                </li>
                <li>
                    <a href="<?= url([
                        '/post-manage/post/create',
                        'type' => 'page',
                    ]) ?>"> <i class="icon-docs"></i> <?= t('app', 'New Page') ?> </a>
                </li>
                <li>
                    <a href="<?= url([
                        '/post-manage/post/create',
                        'type' => 'portfolio',
                    ]) ?>"> <i class="icon-docs"></i> <?= t('app', 'New Portfolio') ?> </a>
                </li>
                <li>
                    <a href="<?= url([
                        '/../../site/flush-cache'
                    ]) ?>" target="_blank"> <i class="icon-fire"></i> <?= t('app', 'Flush Cache') ?> </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
<!-- END PAGE ACTIONS -->