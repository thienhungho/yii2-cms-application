<article class="post list border-bottom border-color-gray">
    <div class="wp-picture">
        <img src="/<?= get_other_img_size_path('large', $model->feature_img) ?>" alt="blog-post">
    </div><!--wp-picture-->
    <div class="content-article text-center">
        <div>
            <h2 class="post-heading">
                <a href="<?= get_post_url($model->post_type, $model->slug) ?>"><?= $model->title ?></a>
            </h2>
            <p><?= get_description($model->content, 35) ?></p>
        </div>
        <div class="category">
            <span><?= t('app', 'by') ?></span><a href="/"><?= $model->author0->username ?></a>, <?= t('app', 'on') ?> <a href="/"><?= date('l, d F y' , strtotime($model->created_at)) ?></a>
        </div><!--category-->
    </div><!--content-article-->
</article>