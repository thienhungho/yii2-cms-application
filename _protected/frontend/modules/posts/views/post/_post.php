<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<div class="col-md-4 animate-box fadeInUp animated-fast">
    <article class="article-entry">
        <a href="<?= \yii\helpers\Url::to(['/post/post/view', 'type' => $model->post_type, 'slug' => $model->slug]) ?>" class="blog-img" style="background-image: url(/<?= $model->feature_img ?>);">
            <p class="meta"><span class="day"><?= date('d', strtotime($model->created_at)) ?></span><span class="month"><?= date('M', strtotime($model->created_at)) ?></span></p>
        </a>
        <div class="desc">
            <h2><a href="<?= \yii\helpers\Url::to(['/post/post/view', 'type' => $model->post_type, 'slug' => $model->slug]) ?>"><?= $model->title ?></a></h2>
            <p class="admin"><span><?= Yii::t('app', 'Posted by:')?></span> <span><?= $model->author0->username ?></span></p>
            <p><?= substr(strip_tags($model->content), 0, 120) ?></p>
        </div>
    </article>
</div>