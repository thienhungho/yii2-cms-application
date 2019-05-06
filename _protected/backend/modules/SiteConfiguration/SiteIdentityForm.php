<?php

namespace backend\modules\SiteConfiguration;

use common\modules\uploads\Uploads;
use Yii;
use yii\base\Model;
use yii\helpers\FileHelper;
use yii\imagine\Image;
use yii\web\UploadedFile;

/**
 * Login form
 */
class SiteIdentityForm extends Model
{
    const FAVICON_DEFAULT = 'uploads/favicon.ico';
    const APP_LOGO_DEFAULT = 'uploads/default-logo.png';

    public $app_name;
    public $app_description;
    public $favicon;
    public $app_logo;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['app_name', 'app_description'], 'required'],
            [['app_name', 'app_description'], 'string'],
            [['favicon'], 'default', 'value' => self::FAVICON_DEFAULT],
            [['app_logo'], 'default', 'value' => self::APP_LOGO_DEFAULT]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'app_name' => Yii::t('app', 'App Name'),
            'app_description' => Yii::t('app', 'App Description'),
            'favicon' => Yii::t('app', 'Favicon'),
            'app_logo' => Yii::t('app', 'App Logo'),
        ];
    }

    /**
     * @return bool
     * @throws \yii\base\Exception
     * @throws \yii\base\InvalidConfigException
     */
    public function config()
    {
        if ($this->validate()) {
            $this->configAppName();
            $this->configAppDescription();
            $this->configAppFavicon();
            $this->configAppLogo();

            return true;
        }

        return false;
    }

    /**
     * Config Primary Language Function
     */
    private function configAppName()
    {
        $app_name = $this->app_name;
        $content = <<<PHP
<?php

return '$app_name';
PHP;
        file_put_contents(Yii::getAlias('@common') . '/config/name.php', $content);
        set_setting('site_configuration', 'app_name', $this->app_name);
    }

    /**
     * Config Multiple Language Language Function
     */
    private function configAppDescription()
    {
        set_setting('site_configuration', 'app_description', $this->app_description);
    }

    /**
     * @throws \yii\base\Exception
     * @throws \yii\base\InvalidConfigException
     */
    private function configAppFavicon()
    {
        $file = upload_img('SiteIdentityForm[favicon]', false);
        if ($file) {
            $this->favicon = $file;
        }
        set_setting('site_configuration', 'app_favicon', $this->favicon);
    }

    /**
     * @throws \yii\base\Exception
     * @throws \yii\base\InvalidConfigException
     */
    private function configAppLogo()
    {
        $file = upload_img('SiteIdentityForm[app_logo]', false);
        if ($file) {
            $this->app_logo = $file;
        }
        set_setting('site_configuration', 'app_logo', $this->app_logo);
    }
}
