<?php \yii\widgets\ActiveForm::begin([
    'class' => 'cmnt_reply_form',
    'action' => url(['/comment/comment/create']),
    'method' => 'post'
]) ?>
    <input type="hidden" id="Comment[obj_type]" name="Comment[obj_type]" value="<?= $model->post_type ?>">
    <input type="hidden" id="Comment[obj_id]" name="Comment[obj_id]" value="<?= $model->id ?>">
    <input type="hidden" id="Comment[type]" name="Comment[type]" value="<?= $model->post_type . '-comment' ?>">
    <input type="hidden" id="Comment[parent]" name="Comment[parent]" value="0">
    <?php
    if (is_login()) { ?>
        <input type="hidden" id="Comment[author]" name="Comment[author]" value="<?= get_current_user_id() ?>">
        <input type="hidden" id="Comment[author_name]" name="Comment[author_name]" value="<?= get_current_user_name() ?>">
        <input type="hidden" id="Comment[author_email]" name="Comment[author_email]" value="<?= get_current_user_email() ?>">
        <input type="hidden" id="Comment[author_url]" name="Comment[author_url]" value="/">
    <?php } else { ?>
        <div class="col-md-12">
            <div class="form-group">
                <input class="input_field" type="text" id="Comment[author_name]" name="Comment[author_name]" placeholder="<?= Yii::t('app', 'Name') ?>" required="">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input class="input_field" type="email" id="Comment[author_email]" name="Comment[author_email]" placeholder="<?= Yii::t('app', 'Email') ?>" required="">
            </div>
        </div>
    <?php }
    ?>

    <div class="col-md-12">
        <div class="form-group">
            <textarea class="input_field" id="Comment[content]" name="Comment[content]" placeholder="<?= Yii::t('app', 'Your text here...') ?>" rows="10" cols="80"></textarea>
        </div>
        <button type="submit" class="btn btn--round btn--default" name="btn"><?= Yii::t('app', 'Submit Now') ?></button>
    </div>
<?php \yii\widgets\ActiveForm::end() ?>