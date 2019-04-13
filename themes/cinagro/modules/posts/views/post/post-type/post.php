<?php
$limitComment = Yii::$app->request->get('number-comment', 1);
?>
<div class="container single-blog">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb-top">
                <h2><?= $model->title ?></h2>
                <ol class="breadcrumb">
                    <li><a href="/"><?= Yii::t('app', 'Home') ?></a></li>
                    <li><a href="/content/post"><?= Yii::t('app', 'Blog') ?></a></li>
                    <li class="active"><?= $model->title ?></li>
                </ol><!--breadcrumb-->
            </div>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <!--===================== Gallery Post ========================-->
            <article class="post gallery-post">
                <div class="wp-picture">
                    <div class="gallery owl-carousel owl-theme">
                        <div class="item">
                            <img src="/<?= get_other_img_size_path('large', $model->feature_img) ?>" alt="slider">
                        </div>
                    </div><!--gallery-->
                </div><!--wp-picture-->
                <div class="content-article">
                    <div class="category">
                        <span><?= t('app', 'by') ?></span><a href="index.html#"><?= $model->author0->username ?></a>, <?= t('app', 'on') ?> <a href="/"><?= date('l, d F Y' , strtotime($model->created_at)) ?> </a>
                    </div><!--category-->
                </div><!--content-article-->
                <div class="entry-content">
                    <?= $model->content ?>
                </div>
            </article>
            <!--================= End of Gallery Post ====================-->
            <!--===================== Bottom Post ========================-->
            <div class="bottom-post">
                <div class="tags">
                    <span><?= t('app', 'Tags') . ':' ?></span>
                    <?php
                    $tags = get_all_term_of_obj('post', $model->id, \thienhungho\TermManagement\models\Term::TERM_TYPE_TAG);
                    foreach ($tags as $tag) { ?>
                        <a href="<?= $tag['term']['slug'] ?>"><?= $tag['term']['name'] ?></a>,
                    <?php }
                    ?>
                </div>
                <ul class="social-icon">
                    <li class="facebook"><a href="<?= '' ?>"><i class="fa fa-facebook"></i></a></li>
                    <li class="google"><a href="<?= '' ?>"><i class="fa fa-google-plus"></i></a></li>
                    <li class="tumblr"><a href="<?= '' ?>"><i class="fa fa-tumblr"></i></a></li>
                    <li class="instagram"><a href="<?= '' ?>"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
            <!--===================== End of Bottom Post ========================-->
            <div class="next-post">
                <?php
                $previous_post = get_previous_post($model->id, 1);
                if (!empty($previous_post)) { ?>
                    <article class="post">
                        <div class="wp-picture">
                            <a href="index.html#"><img src="/<?= get_other_img_size_path('thumbnail', $previous_post[0]['feature_img']) ?>" alt="next-post"></a>
                        </div>
                        <div class="content-article">
                            <span><?= t('app', 'Previous:') ?></span>
                            <h2 class="post-heading">
                                <a href="index.html#"><?= $previous_post[0]['title'] ?></a>
                            </h2>
                        </div>
                    </article>
                <?php }

                $next_post = get_next_post($model->id, 1);
                if (!empty($next_post)) { ?>
                    <article class="post next">
                        <div class="wp-picture">
                            <a href="index.html#"><img src="/<?= get_other_img_size_path('thumbnail', $next_post[0]['feature_img']) ?>" alt="next-post"></a>
                        </div>
                        <div class="content-article">
                            <span><?= t('app', 'Next:') ?></span>
                            <h2 class="post-heading">
                                <a href="index.html#"><?= $next_post[0]['title'] ?></a>
                            </h2>
                        </div>
                    </article>
                <?php }
                ?>
            </div>
            <div class="row posts">
                <div class="col-md-12">
                    <h3>You May Also like </h3>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <article>
                        <a href="../blog/index.html"><img src="../wp-content/themes/cinagro-html/assets/images/mini-post3.jpg" alt="mini-post3"></a>
                        <div class="content">
                            <span>in <a href="../blog/index.html" class="active">NUTRITION + WELLNESS</a>/<a href="index.html#">September 05, 2017</a></span>
                            <a href="../blog/index.html" class="title">Conventional Vs. Organic</a>
                        </div><!--content-->
                    </article>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <article>
                        <a href="../blog/index.html"><img src="../wp-content/themes/cinagro-html/assets/images/mini-post2.jpg" alt="mini-post3"></a>
                        <div class="content">
                            <span>in <a href="../blog/index.html" class="active">NUTRITION + WELLNESS</a>/<a href="index.html#">September 05, 2017</a></span>
                            <a href="../blog/index.html" class="title">How to use organic herbs for better sleep at night</a>
                        </div><!--content-->
                    </article>
                </div>
            </div>
            <div class="comments">
                <h3>2 Comments</h3>
                <ul>
                    <li>
                        <img src="../wp-content/themes/cinagro-html/assets/images/user.jpg" alt="user">
                        <div class="content">
                            <a href="index.html#"><h6>Dolores Gregory</h6></a>
                            <span>September 05, 2017</span>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                        </div>
                    </li>
                    <li>
                        <ul class="reply">
                            <li>
                                <img src="../wp-content/themes/cinagro-html/assets/images/user2.jpg" alt="user">
                                <div class="content">
                                    <a href="index.html#"><h6>Ruth Lynch</h6></a>
                                    <span>September 05, 2017</span>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                                </div>
                            </li>
                        </ul><!--reply-->
                    </li>
                </ul>
                <form id="contact-us-form">
                    <h3>Leave a Comment</h3>
                    <div>
                        <input type="text" name="contact-us-name" class="contact-us-input-one" placeholder="Your Name">
                        <input type="text" name="contact-us-email" class="contact-us-input-two" placeholder="Your E-mail">
                    </div>
                    <div>
                        <textarea name="contact-us-massage" class="contact-us-massage" placeholder="Your Message..."></textarea>
                    </div>
                    <div>
                        <button type="submit" class="custom-btn green">submit</button>
                    </div>
                </form>
            </div>
        </div>
        <?= $this->render('../../../../../views/sidebar/sidebar_1'); ?>
    </div>
</div>