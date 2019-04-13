<?php
namespace backend\controllers;

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
     */
    public function actionIndex() {
        $base_path = Yii::getAlias('@uploads');
        $web_path = '/';
        $model = new UploadForm();
        $res = [];

        if (request()->isPost) {
            $model->file = UploadedFile::getInstanceByName('file');

            if ($model->validate()) {
                $model->file->saveAs($base_path . '/' . $model->file->baseName . '.' . $model->file->extension);
            }

            // Get file link
            $res = [
                'link' => $web_path . 'uploads/' . $model->file->baseName . '.' . $model->file->extension,
            ];
        }

        // Response data
        Yii::$app->response->format = Yii::$app->response->format = Response::FORMAT_JSON;
        return $res;
    }
}
