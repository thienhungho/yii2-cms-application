<div class="col-lg-4" id="sidebar-1">
    <aside class="sidebar sidebar--blog">

        <div class="sidebar-card card--blog_sidebar card--category">
            <div class="card-title">
                <h4><?= Yii::t('app', 'Categories') ?></h4>
            </div>
            <div class="collapsible-content">
                <ul class="card-content">
                    <?php
                    $categories = get_all_term(\common\modules\terms\Term::CATEGORY_TERM_TYPE);
                    foreach ($categories as $category) { ?>
                        <li>
                            <a href="<?= get_post_term_url(
                                    \cmsbase\modules\PostBase\Post::POST_TYPE_POST,
                                    \common\modules\terms\Term::CATEGORY_TERM_TYPE,
                                    $category['slug']
                            )?>"><span class="lnr lnr-chevron-right"></span><?= slug_to_text($category['name']) ?>
                                <span class="item-count"><?= count_number_obj_in_term($category['id'])?></span>
                            </a>
                        </li>
                    <?php }
                    ?>
                </ul>
            </div>
            <!-- end /.collapsible_content -->
        </div>
        <!-- end /.sidebar-card -->

        <div class="sidebar-card card--blog_sidebar card--tags">
            <div class="card-title">
                <h4><?= Yii::t('app', 'Tags') ?></h4>
            </div>

            <ul class="tags">
                <?php
                $tags = get_all_term(\common\modules\terms\Term::TERM_TYPE_TAG);
                foreach ($tags as $tag) { ?>
                    <li>
                        <a href="<?= get_post_term_url(
                                'post',
                                'tag',
                                $tag['slug']
                        )?>"><?= slug_to_text($tag['name']) ?></a>
                    </li>
                <?php }
                ?>
            </ul>
            <!-- end /.tags -->
        </div>
        <!-- end /.sidebar-card -->

        <div class="banner">

        </div>
        <!-- end /.banner -->
    </aside>
    <!-- end /.aside -->
</div>

<script>
    $('#sidebar-1').theiaStickySidebar({
        additionalMarginTop: 30
    });
</script>