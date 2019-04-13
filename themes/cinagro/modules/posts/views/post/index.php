<?php

$this->title = Yii::t('app', slug_to_text($type));

?>

<div class="breadcrumb-top bg-yellow">
    <div class="container">
        <h2><?= t('app', slug_to_text($type)) ?></h2>
        <ol class="breadcrumb">
            <li><a href="/"><?= t('app', 'Home') ?></a></li>
            <li class="active"><?= t('app', slug_to_text($type)) ?></li>
        </ol><!--breadcrumb-->
    </div>
</div>

<section class="blog_area section--padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <?= \yii\widgets\ListView::widget([
                    'dataProvider' => $dataProvider,
                    'itemView'     => '_post',
                    'summary' => '',
                    'pager' => [
                        'prevPageLabel' => '<span class="lnr lnr-arrow-left"></span>',
                        'nextPageLabel' => '<span class="lnr lnr-arrow-right"></span>',
                        'maxButtonCount' => 4,
                    ]
                ]); ?>
            </div>
            <!-- end /.col-md-8 -->

            <?= $this->render('../../../../views/sidebar/sidebar_1'); ?>
            <!-- end /.col-md-4 -->

        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>