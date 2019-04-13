<div class="author-author__info inline has_dropdown">
    <div class="author__avatar">
        <img style="max-width: 50px; border: 0px solid #E5E1EA; border-radius: 100%" src="/<?= get_other_img_size_path('thumbnail', Yii::$app->user->identity->avatar) ?>" alt="user avatar">

    </div>
    <div class="autor__info">
        <p class="name">
            <?= Yii::$app->user->identity->username ?> </p>
<!--        <p class="ammount">$20.45</p>-->
    </div>

    <div class="dropdown dropdown--author">
        <ul>
            <li>
                <?= \yii\helpers\Html::a(
                        '<span class="lnr lnr-exit"></span>' . Yii::t('app', 'Logout'),
                        url(['/site/logout']),
                        ['data-method' => 'post',])
                ?>
            </li>
        </ul>
    </div>
</div>