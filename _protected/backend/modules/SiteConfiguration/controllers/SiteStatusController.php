<?php

namespace backend\modules\SiteConfiguration\controllers;

use backend\modules\SiteConfiguration\SiteStatusForm;
use yii\helpers\Url;
use yii\web\Controller;

/**
 * Default controller for the `SiteConfiguration` module
 */
class SiteStatusController extends Controller
{
    /**
     * @return string|\yii\web\Response
     */
    public function actionIndex()
    {
        $model = new SiteStatusForm();
        $model->coming_soon_status = get_setting_value(
            'site_status',
            'coming_soon_status',
            STATUS_DISABLE
        );
        $model->coming_soon_time_release = get_setting_value(
            'site_status',
            'coming_soon_time_release',
            date("Y-m-d H:i:s", strtotime("+1 week"))
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
