<?php

namespace frontend\modules\comments\controllers;

use common\modules\comments\Comment;
use yii\base\ErrorException;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `CommentModule` module
 */
class CommentController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class'   => VerbFilter::className(),
                'actions' => [
                    'delete'       => ['post'],
                    'create'       => ['post'],
                    'changeStatus' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @return \yii\web\Response
     * @throws ErrorException
     * @throws \yii\db\Exception
     */
    public function actionCreate()
    {
        $model = new Comment();
        if ($model->loadAll(\Yii::$app->request->post()) && $model->saveAll()) {
            return $this->goBack(request()->referrer);
        } else {
            throw new ErrorException(\Yii::t('app', "Can't create comment"));
        }
    }

    /**
     * Finds the Comment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param integer $id
     *
     * @return Comment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Comment::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException(\Yii::t('app', 'The requested page does not exist.'));
        }
    }
}
