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
class SiteStatusForm extends Model
{
    public $coming_soon_status;
    public $coming_soon_time_release;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['coming_soon_time_release'], 'safe'],
            [['coming_soon_status'], 'default', 'value' => STATUS_DISABLE],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'coming_soon_status' => Yii::t('app', 'Coming soon status'),
            'coming_soon_time_release' => Yii::t('app', 'Coming soon time release'),
        ];
    }

    /**
     * @return bool
     */
    public function config()
    {
        if ($this->validate()) {
            $this->configComingSoon();
            return true;
        }

        return false;
    }

    /**
     *
     */
    private function configComingSoon()
    {
        if ($this->coming_soon_status === STATUS_ENABLE) {
            $front_end_content = <<<PHP
<?php

header('Location: /coming-soon', true,302);
exit();
PHP;
            $coming_soon_content = <<<PHP
<?php

PHP;
        } else {
            $front_end_content = <<<PHP
<?php

PHP;
            $coming_soon_content = <<<PHP
<?php

header('Location: /', true,301);
exit();
PHP;
        }
        file_put_contents(Yii::getAlias('@backend') . '/../../_coming-soon.php', $front_end_content);
        file_put_contents(Yii::getAlias('@backend') . '/../../coming-soon/_coming-soon.php', $coming_soon_content);
        set_setting('site_status', 'coming_soon_status', $this->coming_soon_status);
        set_setting('site_status', 'coming_soon_time_release', $this->coming_soon_time_release);
    }
}
