<?php
namespace common\controllers;

use common\models\UploadForm;
use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class UploadController extends Controller
{
    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {
        if ($action->id == 'index') {
            $this->enableCsrfValidation = false;
        }

        return parent::beforeAction($action);
    }

    /**
     * @return array
     * @throws \yii\base\Exception
     * @throws \yii\base\InvalidConfigException
     */
    public function actionIndex()
    {
        $res = [];

        if (request()->isPost) {
            $img = upload_img('file' , false);
            if (!empty($img)) {
                $res = [
                    'link' => '/' . $img,
                ];
            }
        }

        Yii::$app->response->format = Response::FORMAT_JSON;
        return $res;
    }
}
