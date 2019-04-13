<?php

namespace thienhungho\ProductManagement\modules\ProductManageForCustomer\controllers;

use thienhungho\ProductManagement\modules\ProductBase\Product;
use thienhungho\ProductManagement\modules\ProductBase\ProductType;
use thienhungho\ProductManagement\modules\ProductManageForCustomer\search\ProductSearch;
use thienhungho\TermManagement\modules\TermBase\TermRelationships;
use common\modules\metas\Meta;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class'   => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @param string $slug
     *
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionIndex($slug = 'product')
    {
        if (!is_product_type_slug($slug)) {
            throw new NotFoundHttpException(t('app', 'The requested page does not exist.'));
        }
        $product_type = ProductType::find()
            ->where(['slug' => $slug])
            ->one();
        $searchModel = new ProductSearch();
        $queryParams = request()->queryParams;
        $queryParams['ProductSearch']['product_type'] = $product_type->name;
        $dataProvider = $searchModel->search($queryParams);
        $dataProvider->sort->defaultOrder = ['id' => SORT_DESC];
        view()->title = t('app', $product_type->name);

        return $this->render('index', [
            'searchModel'  => $searchModel,
            'dataProvider' => $dataProvider,
            'product_type' => $product_type,
        ]);
    }

    /**
     * @param $id
     *
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $providerCart = new \yii\data\ArrayDataProvider([
            'allModels' => $model->carts,
        ]);
        $providerOrderItem = new \yii\data\ArrayDataProvider([
            'allModels' => $model->orderItems,
        ]);

        return $this->render('view', [
            'model'             => $this->findModel($id),
            'providerCart'      => $providerCart,
            'providerOrderItem' => $providerOrderItem,
        ]);
    }

    /**
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     * @throws \yii\db\Exception
     */
    public function actionBulk()
    {
        $action = request()->post('action');
        $ids = request()->post('selection');
        if (!empty($ids)) {
//            if ($action == ACTION_DELETE) {
//                foreach ($ids as $id) {
//                    $model = $this->findModel($id);
//                    if ($model->deleteWithRelated()) {
//                        delete_seo_data($model->product_type, $model->primaryKey);
//                        set_flash_success_delete_content();
//                    } else {
//                        set_flash_error_delete_content();
//                    }
//                }
//            }
        }

        return $this->goBack(request()->referrer);
    }

    /**
     * @param $id
     *
     * @return mixed
     * @throws NotFoundHttpException
     */
    public function actionPdf($id)
    {
        $model = $this->findModel($id);
        $providerCart = new \yii\data\ArrayDataProvider([
            'allModels' => $model->carts,
        ]);
        $providerOrderItem = new \yii\data\ArrayDataProvider([
            'allModels' => $model->orderItems,
        ]);
        $content = $this->renderAjax('_pdf', [
            'model'             => $model,
            'providerCart'      => $providerCart,
            'providerOrderItem' => $providerOrderItem,
        ]);
        $pdf = new \kartik\mpdf\Pdf([
            'mode'        => \kartik\mpdf\Pdf::MODE_UTF8,
            'format'      => \kartik\mpdf\Pdf::FORMAT_A4,
            'orientation' => \kartik\mpdf\Pdf::ORIENT_PORTRAIT,
            'destination' => \kartik\mpdf\Pdf::DEST_BROWSER,
            'content'     => $content,
            'cssFile'     => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
            'cssInline'   => '.kv-heading-1{font-size:18px}',
            'options'     => ['title' => \Yii::$app->name],
            'methods'     => [
                'SetHeader' => [\Yii::$app->name],
                'SetFooter' => ['{PAGENO}'],
            ],
        ]);

        return $pdf->render();
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param integer $id
     *
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException(t('app', 'The requested page does not exist.'));
        }
    }
}
