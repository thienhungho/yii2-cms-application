<?php

namespace common\modules\seo;

use Yii;
use \common\modules\seo\base\Seo as BaseSeo;

/**
 * This is the model class for table "seo".
 */
class Seo extends BaseSeo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['title', 'slug', 'obj_id', 'obj_type'], 'required'],
            [['description', 'keyword'], 'string'],
            [['obj_id', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'slug', 'social_image', 'social_title', 'social_description', 'obj_type'], 'string', 'max' => 255],
            [['is_index', 'is_follow'], 'string', 'max' => 3],
            [['is_index', 'is_follow'], 'default', 'value' => 'yes'],
            [['created_by', 'updated_by'], 'default', 'value' => Yii::$app->user->identity->id],
        ]);
    }

    public function generateSeoMetaTag($args = [])
    {
        /**
         * Base
         */
        Yii::$app->view->registerMetaTag(['name' => 'title', 'content' => $this->title . ' - ' . get_app_name()]);
        Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $this->description]);
        if ($this->is_index == 'yes') {
            Yii::$app->view->registerMetaTag(['name' => 'robots', 'content' => 'index, follow']);
        } else {
            Yii::$app->view->registerMetaTag(['name' => 'robots', 'content' => 'noindex, nofollow']);
        }
        /**
         * Facebook meta
         */
        Yii::$app->view->registerMetaTag(['name' => 'og:site_name', 'content' => get_app_name()]);
        if (!empty($args['og_type'])) {
            Yii::$app->view->registerMetaTag(['name' => 'og:type', 'content' => $args['og_type']]);
        }
        if (!empty($args['og_locale'])) {
            Yii::$app->view->registerMetaTag(['name' => 'og:locale', 'content' => $args['og_locale']]);
        } else {
            Yii::$app->view->registerMetaTag(['name' => 'og:locale', 'content' => get_current_client_language()]);
        }
        Yii::$app->view->registerMetaTag(['name' => 'og:title', 'content' => $this->title . ' - ' . get_app_name()]);
        Yii::$app->view->registerMetaTag(['name' => 'og:image', 'content' => '/'. $this->social_image]);
        Yii::$app->view->registerMetaTag(['name' => 'og:image:width', 'content' => '600']);
        Yii::$app->view->registerMetaTag(['name' => 'og:image:height', 'content' => '400']);
        Yii::$app->view->registerMetaTag(['name' => 'og:url', 'content' => get_current_url()]);
        Yii::$app->view->registerMetaTag(['name' => 'og:description', 'content' => $this->social_description]);
        /**
         * twitter meta
         */
        Yii::$app->view->registerMetaTag(['name' => 'twitter:card', 'content' => 'summary_large_image']);
        Yii::$app->view->registerMetaTag(['name' => 'twitter:image', 'content' => '/' . $this->social_image]);
        Yii::$app->view->registerMetaTag(['name' => 'twitter:title', 'content' => $this->social_title]);
        Yii::$app->view->registerMetaTag(['name' => 'twitter:description', 'content' => $this->social_description]);
    }
	
}
