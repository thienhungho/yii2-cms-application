<?php

namespace backend\modules\SiteConfiguration\controllers;

use backend\modules\SiteConfiguration\MailerForm;
use yii\helpers\Url;
use yii\web\Controller;

/**
 * Default controller for the `SiteConfiguration` module
 */
class MailerController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new MailerForm();
        if ($model->load(\request()->post())) {
            if ($model->config()) {
                set_flash_has_been_saved();
                return $this->redirect(Url::to(['index']));
            } else {
                set_flash_has_been_saved();
                return $this->render('index', ['model' => $model]);
            }
        } else {
            return $this->render('index', ['model' => $model]);
        }
    }
}
