<?php
/**
 * @link https://github.com/himiklab/yii2-recaptcha-widget
 * @copyright Copyright (c) 2014-2019 HimikLab
 * @license http://opensource.org/licenses/MIT MIT
 */

namespace himiklab\yii2\recaptcha;

use Yii;
use yii\base\Exception;
use yii\base\InvalidConfigException;

/**
 * ReCaptcha widget validator.
 *
 * @author HimikLab
 * @package himiklab\yii2\recaptcha
 */
class ReCaptchaValidator2 extends ReCaptchaBaseValidator
{
    /** @var string */
    public $uncheckedMessage;

    public function init()
    {
        parent::init();
        /** @var ReCaptchaConfig $reCaptchaConfig */
        $reCaptchaConfig = Yii::$app->get($this->configComponentName, false);

        if (!$this->secret) {
            if ($reCaptchaConfig && $reCaptchaConfig->secretV2) {
                $this->secret = $reCaptchaConfig->secretV2;
            } else {
                throw new InvalidConfigException('Required `secret` param isn\'t set.');
            }
        }
    }

    /**
     * @param \yii\base\Model $model
     * @param string $attribute
     * @param \yii\web\View $view
     * @return string
     */
    public function clientValidateAttribute($model, $attribute, $view)
    {
        $message = \addslashes($this->uncheckedMessage ?: Yii::t(
            'yii',
            '{attribute} cannot be blank.',
            ['attribute' => $model->getAttributeLabel($attribute)]
        ));

        return <<<JS
if (!value) {
     messages.push("{$message}");
}
JS;
    }

    /**
     * @param string|array $value
     * @return array|null
     * @throws Exception
     * @throws \yii\base\InvalidParamException
     */
    protected function validateValue($value)
    {
        if ($this->isValid === null) {
            if (!$value) {
                $this->isValid = false;
            } else {
                $response = $this->getResponse($value);
                if (!isset($response['success'], $response['hostname']) ||
                    ($this->checkHostName && $response['hostname'] !== Yii::$app->request->hostName)
                ) {
                    throw new Exception('Invalid recaptcha verify response.');
                }

                $this->isValid = $response['success'] === true;
            }
        }

        return $this->isValid ? null : [$this->message, []];
    }
}
