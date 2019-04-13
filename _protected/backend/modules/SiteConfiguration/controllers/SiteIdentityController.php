<?php

namespace backend\modules\SiteConfiguration\controllers;

use backend\modules\SiteConfiguration\LanguageForm;
use backend\modules\SiteConfiguration\SiteIdentityForm;
use yii\helpers\Url;
use yii\web\Controller;

/**
 * Default controller for the `SiteConfiguration` module
 */
class SiteIdentityController extends Controller
{
    /**
     * @return string|\yii\web\Response
     * @throws \yii\base\Exception
     * @throws \yii\base\InvalidConfigException
     */
    public function actionIndex()
    {
        $model = new SiteIdentityForm();
        $model->app_name = require \Yii::getAlias('@common') . '/config/name.php';
        $model->app_description = get_setting_value(
            'site_configuration',
            'app_description',
            'A new website'
        );
        $model->favicon = get_setting_value(
            'site_configuration',
            'app_favicon',
            SiteIdentityForm::FAVICON_DEFAULT
        );
        if ($model->load(\request()->post())) {
            if ($model->config()) {
                set_flash_has_been_saved();
                return $this->redirect(Url::to(['index']));
            } else {
                set_flash_has_not_been_saved();
                return $this->render('index', ['model' => $model]);
            }
        } else {
            return $this->render('index', ['model' => $model]);
        }
    }
}
