<?php

namespace backend\modules\SiteConfiguration\controllers;

use backend\modules\SiteConfiguration\MediaForm;
use yii\helpers\Url;
use yii\web\Controller;

/**
 * Default controller for the `SiteConfiguration` module
 */
class MediaController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new MediaForm();
        $model->thumbnail_size_width = get_setting_value('media_configuration', 'thumbnail_size_width', 150);
        $model->thumbnail_size_height = get_setting_value('media_configuration', 'thumbnail_size_height', 150);
        $model->medium_size_width = get_setting_value('media_configuration', 'medium_size_width', 300);
        $model->medium_size_height = get_setting_value('media_configuration', 'medium_size_height', 300);
        $model->large_size_width = get_setting_value('media_configuration', 'large_size_width', 1024);
        $model->large_size_height = get_setting_value('media_configuration', 'large_size_height', 1024);
        $model->quality = get_setting_value('media_configuration', 'quality', 5);
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
