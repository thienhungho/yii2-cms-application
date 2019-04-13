<?php

$limitComment = Yii::$app->request->get('number-comment', 1);

?>

<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="/"><?= Yii::t('app', 'Home') ?></a>
                        </li>
                        <li class="active">
                            <a href="<?= get_current_url() ?>"><?= Yii::t('app','Blog') ?></a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title"><?= $model->title ?></h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>

<section class="blog_area section--padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single_blog blog--default">
                    <article>
                        <figure>
                            <img src="/<?= get_other_img_size_path('large', $model->feature_img) ?>" alt="">
                        </figure>
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
                                    <p><?= $model->created_at ?></p>
                                </div>
                                <div class="comment_view">
                                    <p class="comment">
                                        <span class="lnr lnr-bubble"></span><?= count_all_comment_of_post('post', $model->id) ?></p>
                                    <p class="view">
                                        <span class="lnr lnr-eye"></span>345</p>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog_content">
                            <?php get_post_content($model) ?>
                            <div class="share_tags">
                                <div class="share">
                                    <p><?= Yii::t('app', 'Share this article') ?></p>
                                    <div class="social_share active">
                                        <ul class="social_icons">
                                            <li>
                                                <a href="<?= get_share_link('Facebook', get_current_url()) ?>" target="_blank">
                                                    <span class="fa fa-facebook"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= get_share_link('Twitter', get_current_url()) ?>" target="_blank">
                                                    <span class="fa fa-twitter"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= get_share_link('G+', get_current_url()) ?>" target="_blank">
                                                    <span class="fa fa-google-plus"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= get_share_link('Linkedin', get_current_url()) ?>" target="_blank">
                                                    <span class="fa fa-linkedin"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end social_share -->
                                </div>
                                <!-- end bog_share_ara  -->

                                <div class="tags">
                                    <ul>
                                        <?php
                                            $categories = get_all_term_of_obj($model->post_type, $model->id, \common\modules\terms\Term::CATEGORY_TERM_TYPE, 3);
                                            foreach ($categories as $category) {
                                                ?>
                                                <li>
                                                    <a href="<?= get_post_term_url($model->post_type, $category['term']['term_type'], $category['term']['slug']) ?>"><?= $category['term']['name'] ?></a>
                                                </li>
                                             <?php }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- end /.single_blog -->

                <div class="author_info">
                    <div class="author__img">
                        <img src="/<?= get_other_img_size_path('thumbnail', $model->author0->avatar) ?>" alt="Auth Image">
                    </div>

                    <div class="author__info">
                        <h4><?= $model->author0->username ?></h4>
                        <p><?= $model->author0->bio ?></p>
                        <ul>
                            <li>
                                <a href="single-blog.html#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </li>
                            <li>
                                <a href="single-blog.html#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="single-blog.html#">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </li>
                            <li>
                                <a href="single-blog.html#">
                                    <span class="fa fa-linkedin"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end /.author_info -->

                <div class="comment_area" id="comment-form">
                    <div class="comment__title">
                        <h4><?= count_all_comment_of_post('post', $model->id) ?> <?= Yii::t('app', 'comments') ?></h4>
                    </div>

                    <div class="comment___wrapper">
                        <ul class="media-list">
                            <?= \yii\widgets\ListView::widget([
                                'dataProvider' => new \yii\data\ActiveDataProvider([
                                    'query' => query_all_comment(get_comment_type_from_obj_type($model->post_type), $model->post_type, $model->primaryKey),
                                    'pagination' => [
                                        'pageSize' => 10,
                                    ],
                                    'sort' => [
                                        'defaultOrder' => [
                                            'id' => SORT_DESC,
                                        ]
                                    ],
                                ]),
                                'itemView'     => '_comment',
                                'summary' => '',
                                'pager' => [
                                    'prevPageLabel' => '<span class="lnr lnr-arrow-left"></span>',
                                    'nextPageLabel' => '<span class="lnr lnr-arrow-right"></span>',
                                    'maxButtonCount' => 4,
                                ]
                            ]); ?>
                            <style>
                                #w0 > div.empty {
                                    display: none;
                                }
                                #w0 > div {
                                    width: 100%;
                                }
                            </style>
                        </ul>
                    </div>
                    <!-- end /.comment___wrapper -->
                </div>
                <!-- end /.col-md-8 -->

                <div class="comment_area comment--form">
                    <!-- start reply_form -->
                    <div class="comment__title">
                        <h4><?= Yii::t('app', 'Leave A Reply') ?></h4>
                    </div>
                    <div class="commnet_form_wrapper">
                        <div class="row">
                            <?= $this->render('_comment_form', [
                                    'model' => $model
                            ]) ?>
                        </div>
                    </div>
                    <!-- end /.commnet_form_wrapper -->
                </div>
                <!-- end /.comment_area_wrapper -->
            </div>
            <!-- end /.col-md-8 -->

            <?= $this->render('../../../../../views/sidebar/sidebar_1'); ?>
            <!-- end /.col-md-4 -->

        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>