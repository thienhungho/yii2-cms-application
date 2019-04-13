<section class="latest-news section--padding">
    <!-- start /.container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <?= get_block_content('home-lasted-news-header') ?>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start .row -->
        <div class="row">
            <?php
                $posts = get_all_post('post', '3', 'obj');
                foreach ($posts as $post) { ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="news">
                            <div class="news__thumbnail">
                                <img src="<?= get_other_img_size_path('large', $post->feature_img) ?>">
                            </div>
                            <div class="news__content">
                                <a href="<?= get_post_url('post', $post->slug) ?>" class="news-title">
                                    <h4><?= $post->title ?></h4>
                                </a>
                                <p><?= get_description($post->content, 8) ?></p>
                            </div>
                            <div class="news__meta">
                                <div class="date">
                                    <span class="lnr lnr-clock"></span>
                                    <p style="margin-left: 4px"><?= date('d F Y', strtotime($post->created_at)) ?></p>
                                </div>

                                <div class="other">
                                    <ul>
                                        <li>
                                            <span class="lnr lnr-bubble"></span>
                                            <span style="margin-left: 4px"><?= count_all_comment_of_post('post', $post->id)?></span>
                                        </li>
                                        <li>
                                            <span class="lnr lnr-eye"></span>
                                            <span style="margin-left: 4px">345</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            ?>
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>