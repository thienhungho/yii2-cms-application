<?php

namespace backend\modules\OptimizeConfiguration\controllers;

use backend\modules\OptimizeConfiguration\ViewForm;
use yii\helpers\Url;
use yii\web\Controller;

/**
 * Default controller for the `SiteConfiguration` module
 */
class ViewController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new ViewForm();

        $view = require \Yii::getAlias('@common') . '/config/view.php';
        $model->minify_css = ($view['minifyCss'] == true) ? 'on' : 'off';
        $model->minify_js = ($view['minifyJs'] == true) ? 'on' : 'off';
        $model->minify_html = ($view['minifyOutput'] == true) ? 'on' : 'off';
        $model->concatenate_css = ($view['concatCss'] == true) ? 'on' : 'off';
        $model->concatenate_js = ($view['concatJs'] == true) ? 'on' : 'off';

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

    /**
     *
     */
    public function actionFlushCache()
    {
        \Yii::$app->cache->flush();
        return $this->goHome();
    }
}
