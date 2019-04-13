<?php

/* @var $this yii\web\View */

$this->title = t('app', 'Dashboard');

$totalPosts = count_all_post('post', PARAMS_VALUE_ALL);
$totalPublicPosts = count_all_post('post', STATUS_PUBLIC);
if (!$totalPosts == 0) {
    $percentPublicPosts = @($totalPublicPosts / $totalPosts) * 100;
} else {
    $percentPublicPosts = 0;
}

$totalPortfolios = count_all_post('portfolio', PARAMS_VALUE_ALL);
$totalPublicPortfolios = count_all_post('portfolio', STATUS_PUBLIC);
if (!$totalPortfolios == 0) {
    $percentPublicPortfolios = @($totalPublicPortfolios / $totalPortfolios) * 100;
} else {
    $percentPublicPortfolios = 0;
}

$totalComments = \thienhungho\CommentManagement\modules\CommentBase\Comment::find()
    ->count();
$totalPublicComments = \thienhungho\CommentManagement\modules\CommentBase\Comment::find()
    ->where(['status' => STATUS_PUBLIC])
    ->count();
if (!$totalComments == 0) {
    $percentPublicComments = @($totalPublicComments / $totalComments) * 100;
} else {
    $percentPublicComments = 0;
}

$totalUsers = \thienhungho\UserManagement\models\User::find()->count();
$totalActiveUsers = \thienhungho\UserManagement\models\User::find()
    ->where(['status' => \thienhungho\UserManagement\models\User::STATUS_ACTIVE])
    ->count();
if (!$totalUsers == 0) {
    $percentActiveUsers = @($totalActiveUsers / $totalUsers) * 100;
} else {
    $percentActiveUsers = 0;
}

?>

<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 bordered">
            <div class="display">
                <div class="number">
                    <h3 class="font-green-sharp">
                        <span data-counter="counterup" data-value="<?= $totalPosts  ?>"></span>
                        <small class="font-green-sharp"></small>
                    </h3>
                    <small><?= t('app', 'Total Posts') ?></small>
                </div>
                <div class="icon">
                    <i class="icon-docs"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: <?= $percentPublicPosts ?>%;" class="progress-bar progress-bar-success green-sharp">
                        <span class="sr-only"><?= $percentPublicPosts ?>% <?= t('app', 'Public') ?></span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title"> <?= t('app', 'Public') ?> </div>
                    <div class="status-number"> <?= $percentPublicPosts ?>% </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 bordered">
            <div class="display">
                <div class="number">
                    <h3 class="font-red-haze">
                        <span data-counter="counterup" data-value="<?= $totalPortfolios ?>"></span>
                    </h3>
                    <small><?= t('app', 'Total Portfolios') ?></small>
                </div>
                <div class="icon">
                    <i class="icon-notebook"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: <?= $percentPublicPortfolios ?>%;" class="progress-bar progress-bar-success red-haze">
                        <span class="sr-only"><?= $percentPublicPortfolios ?>% <?= t('app', 'Public') ?></span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title"> <?= t('app', 'Public') ?> </div>
                    <div class="status-number"> <?= $percentPublicPortfolios ?>% </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 bordered">
            <div class="display">
                <div class="number">
                    <h3 class="font-blue-sharp">
                        <span data-counter="counterup" data-value="<?= $totalComments ?>"></span>
                    </h3>
                    <small><?= t('app', 'Total Comments') ?></small>
                </div>
                <div class="icon">
                    <i class="icon-bubbles"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: <?= $percentPublicComments ?>%;" class="progress-bar progress-bar-success blue-sharp">
                        <span class="sr-only"><?= $percentPublicComments ?>% <?= t('app', 'Public') ?></span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title"> <?= t('app', 'Public') ?> </div>
                    <div class="status-number"> <?= $percentPublicComments ?>% </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 bordered">
            <div class="display">
                <div class="number">
                    <h3 class="font-purple-soft">
                        <span data-counter="counterup" data-value="<?= $totalUsers ?>"></span>
                    </h3>
                    <small><?= t('app', 'Total Users') ?></small>
                </div>
                <div class="icon">
                    <i class="icon-user"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: <?= $percentActiveUsers ?>%;" class="progress-bar progress-bar-success purple-soft">
                        <span class="sr-only"><?= $percentActiveUsers ?>% <?= t('app', 'Active') ?></span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title"> <?= t('app', 'Active') ?> </div>
                    <div class="status-number"> <?= $percentActiveUsers ?>% </div>
                </div>
            </div>
        </div>
    </div>
</div>
