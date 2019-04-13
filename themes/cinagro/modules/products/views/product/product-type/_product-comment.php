<div class="fade tab-pane product-tab" id="product-comment">
    <div class="thread">

        <ul class="media-list thread-list">
            <!-- end single comment thread /.comment-->
            <?= \yii\widgets\ListView::widget([
                'dataProvider' => new \yii\data\ActiveDataProvider([
                    'query' => query_all_comment(get_comment_type_from_obj_type($model->product_type), $model->product_type, $model->primaryKey),
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
                ],
                'viewParams' => ['product' => $model],
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
        <!-- end /.media-list -->

        <div class="comment-form-area">
            <h4><?= Yii::t('app', 'Leave a comment') ?></h4>
            <?php if (is_login()) { ?>
            <!-- comment reply -->
            <div class="media comment-form">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" style="width: 50px; border-radius: 100px; margin-right: 20px;" src="/<?= get_other_img_size_path('thumbnail', get_current_user_avatar()) ?>">
                    </a>
                </div>
                <div class="media-body">
                    <?php \yii\widgets\ActiveForm::begin([
                        'class' => 'comment-reply-form',
                        'action' => url(['/comment/comment/create']),
                        'method' => 'post'
                    ]) ?>
                        <input id="form-token" type="hidden" name="<?= request()->csrfParam?>" value="<?= request()->csrfToken?>"/>
                        <input type="hidden" id="Comment[obj_type]" class="form-control" name="Comment[obj_type]" value="<?= $model->product_type ?>"/>
                        <input type="hidden" id="Comment[obj_id]" class="form-control" name="Comment[obj_id]" value="<?= $model->id ?>"/>
                        <input type="hidden" id="Comment[type]" class="form-control" name="Comment[type]" value="<?= $model->product_type ?>-comment"/>
                        <input type="hidden" id="Comment[author_name]" class="form-control" name="Comment[author_name]" value="<?= get_current_user_name() ?>"/>
                        <input type="hidden" id="Comment[author_email]" class="form-control" name="Comment[author_email]" value="<?= get_current_user_email() ?>"/>
                        <input type="hidden" id="Comment[parent]" class="form-control" name="Comment[parent]" value="0"/>
                        <textarea name="Comment[content]" placeholder="<?= Yii::t('app', 'Write your comment...') ?>"></textarea>
                        <button class="btn btn--sm btn--round" type="submit"><?= Yii::t('app', 'Comment') ?></button>
                    <?php \yii\widgets\ActiveForm::end() ?>
                </div>
            </div>
            <!-- comment reply -->
            <?php } ?>
        </div>
        <!-- end /.comment-form-area -->
    </div>
    <!-- end /.comments -->
</div>