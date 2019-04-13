<li class="depth-1">
    <div class="media">
        <div class="pull-left no-pull-xs">
            <a href="single-blog.html#" class="cmnt_avatar">
                <img style="max-width: 80px; border-radius: 100px" src="/<?= get_other_img_size_path('thumbnail', $model->author0->avatar) ?>" class="media-object">
            </a>
        </div>
        <div class="media-body">
            <div class="media_top">
                <div class="heading_left pull-left">
                    <a href="#">
                        <h4 class="media-heading"><?= $model->author0->username ?></h4>
                    </a>
                    <span><?= date('l, d F y', strtotime($model->created_at)) ?></span>
                </div>
                <a href="#comment-form" class="reply hidden-xs-m pull-right" onclick="document.getElementById('Comment[parent]').value = <?= $model->primaryKey ?>"><?= Yii::t('app', 'Reply') ?></a>
            </div>
            <p><?= $model->content ?></p>
        </div>
    </div>
    <ul class="children">
    <?php
        $childs = \common\modules\comments\Comment::find()->where(['parent' => $model->primaryKey])->all();
        if (!empty($childs)) {
            foreach ($childs as $child) { ?>
                <!-- Nested media object -->
                <li class="depth-2">
                    <div class="media">
                        <div class="pull-left no-pull-xs">
                            <a href="#" class="cmnt_avatar">
                                <img style="max-width: 80px; border-radius: 100px" src="/<?= get_other_img_size_path('thumbnail', $child->author0->avatar) ?>" class="media-object">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="media_top">
                                <div class="heading_left pull-left">
                                    <a href="single-blog.html#">
                                        <h4 class="media-heading"><?= $model->author0->username ?></h4>
                                    </a>
                                    <span><?= date('l, d F y', strtotime($model->created_at)) ?></span>
                                </div>
                                <a href="#comment-form" class="reply hidden-xs-m pull-right" onclick="document.getElementById('Comment[parent]').value = <?= $model->primaryKey ?>"><?= Yii::t('app', 'Reply') ?></a>
                            </div>
                            <p><?= $child->content ?></p>
                        </div>
                    </div>
                </li>
            <?php }
        }
    ?>
    </ul>
</li>