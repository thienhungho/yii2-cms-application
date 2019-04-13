<li class="single-thread">
    <div class="media">
        <div class="media-left">
            <a href="#">
                <img class="media-object" src="/<?= get_other_img_size_path('thumbnail', $model->author0->avatar) ?>" alt="Commentator Avatar">
            </a>
        </div>
        <div class="media-body">
            <div>
                <div class="media-heading">
                    <a href="author.html">
                        <h4><?= $model->author0->username ?></h4>
                    </a> <span><?= date('l, d F y', strtotime($model->created_at)) ?></span>
                </div>
                <!--                <span class="comment-tag buyer">Purchased</span>-->
                <a href="single-product.html#" class="reply-link" onclick="document.getElementById('Comment[parent]').value = <?= $model->primaryKey ?>"><?= Yii::t('app', 'Reply') ?></a>
            </div>
            <p><?= $model->content ?></p>
        </div>
    </div>

    <!-- nested comment markup -->
    <ul class="children">
        <?php
        $childs = \common\modules\comments\Comment::find()->where(['parent' => $model->primaryKey])->all();
        if (!empty($childs)) {
            foreach ($childs as $child) { ?>
                <li class="single-thread depth-2">
                    <div class="media">
                        <div class="media-left">
                            <a href="single-product.html#">
                                <img class="media-object" src="/<?= get_other_img_size_path('thumbnail', $child->author0->avatar) ?>" alt="Commentator Avatar">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <h4><?= $model->author0->username ?></h4>
                                <span><?= date('l, d F y', strtotime($model->created_at)) ?></span>
                            </div>
<!--                            <span class="comment-tag author">Author</span>-->
                            <p><?= $child->content ?></p>
                        </div>
                    </div>

                </li>
            <?php }
        }
        ?>
    </ul>

    <?php if (is_login()) { ?>
    <!-- comment reply -->
    <div class="media depth-2 reply-comment" style="display: none;">
        <div class="media-left">
            <a href="single-product.html#">
                <img class="media-object" src="/<?= get_other_img_size_path('thumbnail', get_current_user_avatar()) ?>" alt="Commentator Avatar">
            </a>
        </div>
        <div class="media-body">
            <?php \yii\widgets\ActiveForm::begin([
                'class' => 'comment-reply-form',
                'action' => url(['/comment/comment/create']),
                'method' => 'post'
            ]) ?>
            <input id="form-token" type="hidden" name="<?= request()->csrfParam?>" value="<?= request()->csrfToken?>"/>
            <input type="hidden" id="Comment[obj_type]" class="form-control" name="Comment[obj_type]" value="<?= $product->product_type ?>"/>
            <input type="hidden" id="Comment[obj_id]" class="form-control" name="Comment[obj_id]" value="<?= $product->id ?>"/>
            <input type="hidden" id="Comment[type]" class="form-control" name="Comment[type]" value="<?= $product->product_type ?>-comment"/>
            <input type="hidden" id="Comment[author_name]" class="form-control" name="Comment[author_name]" value="<?= get_current_user_name() ?>"/>
            <input type="hidden" id="Comment[author_email]" class="form-control" name="Comment[author_email]" value="<?= get_current_user_email() ?>"/>
            <input type="hidden" id="Comment[parent]" class="form-control" name="Comment[parent]" value="<?= $model->id ?>"/>
            <textarea class="bla" name="Comment[content]" placeholder="<?= Yii::t('app', 'Write your comment...') ?>"></textarea>
            <button class="btn btn--sm btn--round" type="submit"><?= Yii::t('app', 'Comment') ?></button>
            <?php \yii\widgets\ActiveForm::end() ?>
        </div>
    </div>
    <!-- comment reply -->
    <?php } ?>
</li>