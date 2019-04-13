<?php

namespace backend\modules\SeoConfiguration;

use common\modules\uploads\Uploads;
use Yii;
use yii\base\Model;
use yii\helpers\FileHelper;
use yii\imagine\Image;
use yii\web\UploadedFile;

/**
 * Login form
 */
class SiteMapForm extends Model
{
    public $content_type_in_site_map;
    public $number_item_per_site_map;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number_item_per_site_map'], 'required'],
            [['content_type_in_site_map'], 'string'],
            [['number_item_per_site_map'], 'integer', 'max' => 1000, 'min' => 100],
            [['number_item_per_site_map'], 'default', 'value' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'content_type_in_site_map' => Yii::t('app', 'Content Type In Site Map'),
//            'number_item_per_site_map' => Yii::t('app', 'Number Item Per Site Map'),
        ];
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public function config()
    {
        if ($this->validate()) {
            $this->configContentType();
            $this->configNumberItemPerSiteMap();
            return true;
        }

        return false;
    }

    /**
     * Config Primary Language Function
     */
    private function configContentType()
    {
        $contentType = request()->post('ContentType');
        $settings = Yii::$app->settings;
        $settings->set('seo_configuration', 'content_type_in_site_map', json_encode($contentType));
    }

    /**
     * Config Primary Language Function
     */
    private function configNumberItemPerSiteMap()
    {
        $settings = Yii::$app->settings;
        $settings->set('seo_configuration', 'number_item_per_site_map', $this->number_item_per_site_map);
    }

}
