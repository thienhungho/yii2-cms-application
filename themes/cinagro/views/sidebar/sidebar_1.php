<div class="col-md-4 col-sm-12 col-xs-12">
    <!--================= Sidebar ====================-->
    <aside>
        <!--================= Widget Search ====================-->
        <div class="widget-search">
            <h3 class="widget-title"><?= t('app', 'Search') ?></h3>
            <form>
                <input name="s" id="s" placeholder="<?= t('app', 'Search ...') ?>">
                <button class="btn"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <!--================= End of Widget Search ====================-->
        <!--================= Widget Category ====================-->
        <div class="widget-category">
            <h3 class="widget-title"><?= t('app', 'Category') ?></h3>
            <ul>
                <?php
                $tags = get_all_term(\thienhungho\TermManagement\models\Term::CATEGORY_TERM_TYPE, -1);
                foreach ($tags as $tag) { ?>
                    <li><a href="<?= $tag['slug'] ?>"><span><i class="fa fa-circle"></i></span><?= $tag['name'] ?></a></li>
                <?php }
                ?>
            </ul>
        </div>
        <!--================= End of Widget Category ====================-->
        <!--================= Widget Calendar ====================-->
<!--        <div class="widget-calendar">-->
<!--            <h3 class="widget-title">--><?//= t('app', 'Calendar') ?><!--</h3>-->
<!--            <div id="datepicker"></div>-->
<!--        </div>-->
        <!--================= End of Widget Calendar ====================-->
        <!--================= Widget Post ====================-->
        <div class="widget-post">
            <h3 class="widget-title"><?= t('app', 'Popular Posts') ?></h3>
            <ul>
            <?php
            $posts = get_all_post('post', 3);
            foreach ($posts as $post) { ?>
                <li>
                    <img src="/<?= get_other_img_size_path('thumbnail', $post['feature_img']) ?>" style="width: 100%; margin-right: 0">
                    <a href="<?= get_post_url($post['post_type'], $post['slug']) ?>" style="display: inline-block">
                        <span><?= $post['title'] ?></span>
                    </a>
                </li>
            <?php }
            ?>
            </ul>
        </div>
        <!--================= End of Widget Post ====================-->
        <!--================= Widget Tags ====================-->
        <div class="widget-tags">
            <h3 class="widget-title"><?= t('app', 'Tags') ?></h3>
            <?php
            $tags = get_all_term(\thienhungho\TermManagement\models\Term::TERM_TYPE_TAG, -1);
            foreach ($tags as $tag) { ?>
                <a href="<?= $tag['slug'] ?>"><?= $tag['name'] ?></a>
            <?php }
            ?>
        </div>
        <!--================= End of Widget Tags ====================-->
    </aside>
    <!--================= End of Sidebar ====================-->
</div>

<script>
    $('#sidebar-1').theiaStickySidebar({
        additionalMarginTop: 120
    });
</script>