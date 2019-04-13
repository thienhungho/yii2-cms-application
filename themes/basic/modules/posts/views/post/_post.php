<div class="single_blog blog--default">
    <figure>
        <img src="/<?= get_other_img_size_path('large', $model->feature_img) ?>" alt="Blog image">

        <figcaption>
            <div class="blog__content">
                <a href="<?= get_post_url($model->post_type, $model->slug) ?>" class="blog__title">
                    <h4><?= $model->title ?></h4>
                </a>
                <div class="blog__meta">
                    <div class="author">
                        <span class="lnr lnr-user"></span>
                        <p><?= Yii::t('app', 'by') ?>
                            <a href="#"><?= $model->author0->username ?></a>
                        </p>
                    </div>
                    <div class="date_time">
                        <span class="lnr lnr-clock"></span>
                        <p><?= date('l, d F y' , strtotime($model->created_at)) ?></p>
                    </div>
                    <div class="comment_view">
                        <p class="comment">
                            <span class="lnr lnr-bubble"></span><?= count_all_comment_of_post($model->post_type, $model->primaryKey) ?></p>
                        <p class="view">
                            <span class="lnr lnr-eye"></span>345</p>
                    </div>
                </div>
            </div>
            <div class="btn_text">
                <p><?= get_description($model->content, 35) ?></p>
                <a href="<?= get_post_url($model->post_type, $model->slug) ?>" class="btn btn--md btn--round"><?= Yii::t('app', 'Read More') ?></a>
            </div>
        </figcaption>
    </figure>
</div>