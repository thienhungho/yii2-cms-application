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
class GeneralForm extends Model
{
    const INDEX_STATUS_ALLOW_ALL = 'allow_all';
    const INDEX_STATUS_DISALLOW_ALL = 'disallow_all';

    public $index_status;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['index_status'],'required'],
            [['index_status'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => Yii::t('app', 'Code'),
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
            $this->configIndexStatus();

            return true;
        }

        return false;
    }

    /**
     * Config Primary Language Function
     */
    private function configIndexStatus()
    {
        $indexStatus = $this->index_status;
        $settings = Yii::$app->settings;
        $settings->set('seo_configuration', 'index_status', $indexStatus);

        if ($indexStatus == self::INDEX_STATUS_ALLOW_ALL) {
            $content = <<<TEXT
User-agent: *
Allow: /
TEXT;
        } elseif ($indexStatus == self::INDEX_STATUS_DISALLOW_ALL) {
               $content = <<<TEXT
User-agent: *
Disallow: /
TEXT;
    }
        file_put_contents(Yii::getAlias('@backend') . '/../../robots.txt', $content);
    }

}
