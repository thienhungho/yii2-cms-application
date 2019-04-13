<?php

namespace common\modules\seo\controllers;

use yii\web\Controller;
use yii\web\Response;

/**
 * Default controller for the `SeoModule` module
 */
class SiteMapController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        \Yii::$app->response->format = Response::FORMAT_RAW;
        $headers = \Yii::$app->response->headers;
        $headers->add('Content-Type', 'text/xml');
        return $this->renderPartial('index');
    }

    /**
     * @return string
     */
    public function actionMainSiteMap()
    {
        \Yii::$app->response->format = Response::FORMAT_RAW;
        $headers = \Yii::$app->response->headers;
        $headers->add('Content-Type', 'text/xml');
        return $this->renderPartial('main_sitemap');
    }

    /**
     * @return string
     */
    public function actionChildSiteMap($content_type, $number)
    {
        \Yii::$app->response->format = Response::FORMAT_RAW;
        $headers = \Yii::$app->response->headers;
        $headers->add('Content-Type', 'text/xml');
        return $this->renderPartial('child_sitemap', [
            'content_type' => $content_type,
            'number' => $number,
        ]);
    }
}
