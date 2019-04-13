<?php

$this->title = Yii::t('app', slug_to_text($type));

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
                            <a href="<?= get_current_url() ?>"><?= Yii::t('app', slug_to_text($type)) ?></a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title"><?= Yii::t('app', 'All') . ' ' . Yii::t('app', slug_to_text($type))?></h1>
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