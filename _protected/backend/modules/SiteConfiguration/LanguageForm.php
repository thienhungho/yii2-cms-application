<?php

namespace backend\modules\SiteConfiguration;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class LanguageForm extends Model
{
    public $primary_language;
    public $other_languages;
    public $enable_multiple_language;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['primary_language', 'enable_multiple_language'], 'required'],
            [['primary_language', 'enable_multiple_language'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'primary_language' => Yii::t('app', 'Primary Language'),
            'enable_multiple_language' => Yii::t('app', 'Enable Multiple Language'),
            'other_languages' => Yii::t('app', 'Other languages'),
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
            $this->configPrimaryLanguage();
            $this->configEnableMultipleLanguage();
            $this->configOtherLanguages();
            return true;
        }

        return false;
    }

    /**
     * Config Primary Language Function
     */
    private function configPrimaryLanguage()
    {
        $primary_language = $this->primary_language;
        $content = <<<PHP
<?php

return '$primary_language';
PHP;
        file_put_contents(Yii::getAlias('@common') . '/config/language.php', $content);
    }

    /**
     * Config Other Language Function
     */
    private function configOtherLanguages()
    {
        $languageArray = '[';
        if (is_array($this->other_languages)) {
            foreach ($this->other_languages as $language) {
                $languageArray .= <<<PHP
'$language', 
PHP;

            }
        }
        $languageArray .= ']';
        $content = <<<PHP
<?php

return $languageArray;
PHP;
        file_put_contents(Yii::getAlias('@common') . '/config/other-languages.php', $content);
    }

    /**
     * Config Multiple Language Language Function
     */
    private function configEnableMultipleLanguage()
    {
        $settings = Yii::$app->settings;
        $settings->set('site_configuration', 'enable_multiple_language', $this->enable_multiple_language);
    }

}
