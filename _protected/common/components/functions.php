<?php

require_once 'functions/core.php';
require_once 'functions/helper.php';
require_once 'functions/meta.php';
require_once 'functions/seo.php';

/**
 * @return mixed
 */
function get_app_logo()
{
    return get_setting_value('site_configuration', 'app_logo', 'uploads/default-logo.png');
}


/**
 * @param $post_id
 * @param int $limit
 *
 * @return array|\thienhungho\PostManagement\models\Post[]|\thienhungho\PostManagement\modules\PostBase\query\Post[]|\yii\db\ActiveRecord[]
 */
function get_next_post($post_id, $limit = 1)
{
    return \thienhungho\PostManagement\models\Post::find()
        ->nextRecord($post_id)
        ->limit($limit)
        ->all();
}

/**
 * @param $post_id
 * @param int $limit
 *
 * @return array|\thienhungho\PostManagement\models\Post[]|\thienhungho\PostManagement\modules\PostBase\query\Post[]|\yii\db\ActiveRecord[]
 */
function get_previous_post($post_id, $limit = 1)
{
    return \thienhungho\PostManagement\models\Post::find()
        ->previousRecord($post_id)
        ->limit($limit)
        ->all();
}