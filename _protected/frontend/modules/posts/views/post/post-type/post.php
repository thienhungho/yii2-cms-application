<?php

$limitComment = Yii::$app->request->get('number-comment', 1);

?>

<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(/<?= $model->feature_img ?>); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="flex-active-slide">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text animated fadeInUp">
                            <div class="slider-text-inner text-center">
                                <h1><?= $model->title ?></h1>
                                <h2><span><a href="/"><?= Yii::t('app', 'Home') ?></a> | <a href=""><?= Yii::t('app', $model->post_type) ?></a> | <?= $model->title ?></span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ol class="flex-control-nav flex-control-paging"></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next flex-disabled" href="#" tabindex="-1">Next</a></li></ul></div>
</aside>

<div class="colorlib-classes">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row row-pb-lg">
                    <div class="col-md-12 animate-box fadeInUp animated-fast">
                        <div class="classes class-single">

                            <div>
                                <?= $model->content ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-pb-lg animate-box fadeInUp animated-fast">
                    <div class="col-md-12">
                        <?php
                        $numberComment = \common\modules\comments\Comment::find()->where(['obj_type' => $model->post_type])->andWhere(['obj_id' => $model->getPrimaryKey()])->andWhere(['type' => $model->post_type . '-comment'])->andWhere(['status' => \common\modules\comments\Comment::STATUS_PUBLIC])->count();
                        ?>
                        <h2 class="colorlib-heading-2"><?= $numberComment ?> <?= Yii::t('app', 'Comment')?></h2>
                        <?php
                        $dataProvider = new \yii\data\ActiveDataProvider([
                            'query' => \common\modules\comments\Comment::find()->where(['obj_type' => $model->post_type])->andWhere(['obj_id' => $model->getPrimaryKey()])->andWhere(['type' => $model->post_type . '-comment'])->andWhere(['status' => \common\modules\comments\Comment::STATUS_PUBLIC])->andWhere(['parent' => null])->with('author0')->with('child'),
                            'pagination' => [
                                'pageSize' => $limitComment,
                            ],
                        ]);
                        echo \yii\widgets\ListView::widget([
                            'dataProvider' => $dataProvider,
                            'itemView' => '/post/_comment',
                            'summary' => '',
                        ]);
                        ?>
                    </div>
                </div>
                <div id="comment-form" style="padding-top: 20px">
                    <?= $this->render('/post/_comment_form', ['model' => $model]) ?>
                </div>
            </div>
        </div>
    </div>
</div>