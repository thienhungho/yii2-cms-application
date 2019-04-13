<?php

namespace backend\modules\SiteConfiguration;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class MailerForm extends Model
{
    public $adminEmail;
    public $supportEmail;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                [
                    'adminEmail',
                    'supportEmail'
                ],
                'required',
            ],
            [
                [
                    'adminEmail',
                    'supportEmail'
                ],
                'string',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'adminEmail' => Yii::t('app', 'Admin Email'),
            'supportEmail' => Yii::t('app', 'Support Email'),
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
            $this->configAdminEmail();
            $this->configSupportEmail();

            return true;
        }

        return false;
    }

    /**
     * Config Admin Email Function
     */
    private function configAdminEmail()
    {
        $adminEmail = $this->adminEmail;

        $settings = Yii::$app->settings;
        $settings->set('site_configuration', 'admin_email', $adminEmail);

        $content = <<<PHP
<?php

return '$adminEmail';
PHP;
        file_put_contents(Yii::getAlias('@common') . '/config/adminEmail.php', $content);
    }

    /**
     * Config Support Email Function
     */
    private function configSupportEmail()
    {
        $supportEmail = $this->supportEmail;

        $settings = Yii::$app->settings;
        $settings->set('site_configuration', 'support_email', $supportEmail);

        $content = <<<PHP
<?php

return '$supportEmail';
PHP;
        file_put_contents(Yii::getAlias('@common') . '/config/supportEmail.php', $content);
    }

}
