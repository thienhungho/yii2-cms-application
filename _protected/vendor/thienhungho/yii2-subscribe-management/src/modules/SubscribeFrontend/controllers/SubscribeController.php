<?php

namespace thienhungho\Subscribes\modules\SubscribeFrontend\controllers;

use Yii;
use thienhungho\Subscribes\modules\SubscribeBase\Subscribe;
use thienhungho\Subscribes\modules\SubscribeFrontend\search\SubscribeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SubscribeController implements the CRUD actions for Subscribe model.
 */
class SubscribeController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'create' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @return string|\yii\web\Response
     * @throws \yii\db\Exception
     */
    public function actionCreate()
    {
        $model = new Subscribe();

        if ($model->loadAll(request()->post()) && $model->saveAll()) {
            return $this->goBack(request()->referrer);;
        } else {
            return $this->goBack(request()->referrer);
        }
    }
    
    /**
     * Finds the Subscribe model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Subscribe the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Subscribe::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
        }
    }
}
