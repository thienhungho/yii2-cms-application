<?php

namespace backend\modules\PluginConfiguration;

use common\modules\uploads\Uploads;
use Yii;
use yii\base\Model;
use yii\helpers\FileHelper;
use yii\imagine\Image;
use yii\web\UploadedFile;

/**
 * Login form
 */
class PluginForm extends Model
{
    const STATUS_ENABLED = 'enabled';
    const STATUS_DISABLED = 'disabled';

    public $e_commerce_status;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['e_commerce_status'],'required'],
            [['e_commerce_status'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'e_commerce_status' => t('app', 'E-Commerce Status'),
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
            $this->configECommerceStatus();

            return true;
        }

        return false;
    }

    /**
     * Config Debug Status
     */
    private function configECommerceStatus()
    {
        $settings = Yii::$app->settings;
        $settings->set('plugin_configuration', 'e_commerce_status', $this->e_commerce_status);
    }
}
