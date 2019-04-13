<?php

namespace thienhungho\ProductManagement\modules\ProductManage\controllers;

use thienhungho\ProductManagement\modules\ProductBase\Product;
use thienhungho\ProductManagement\modules\ProductBase\ProductType;
use thienhungho\ProductManagement\modules\ProductManage\search\ProductSearch;
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
     * @param string $slug
     *
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     * @throws \yii\db\Exception
     */
    public function actionCreate($slug = 'product')
    {
        if (!is_product_type_slug($slug)) {
            throw new NotFoundHttpException(t('app', 'The requested page does not exist.'));
        }
        $product_type = ProductType::find()
            ->where(['slug' => $slug])
            ->one();
        $model = new Product();
        $model->author = get_current_user_id();
        $model->status = STATUS_PUBLIC;
        $model->language = get_primary_language();
        $model->comment_status = STATUS_ENABLE;
        $model->rating_status = STATUS_ENABLE;
        $model->product_type = $slug;
        $model->unit = Product::UNIT_1_PRODUCT;
        $model->currency_unit = 'USD';
        $model->id = 0;
        $model->product_type = $slug;
        if ($model->loadAll(request()->post())) {
            if ($model->saveAll()) {
                set_flash_has_been_saved();
                create_all_term_relationships_of_all_term_type_of_product_type($model->product_type, $model->primaryKey);
                create_all_meta_of_all_product_type_meta($model->product_type, $model->primaryKey);

                return $this->redirect([
                    'update',
                    'id' => $model->id,
                ]);
            } else {
                set_flash_has_not_been_saved();
            }
        }

        return $this->render('create', [
            'model' => $model,
            'product_type' => $product_type
        ]);
    }

    /**
     * @param $id
     *
     * @return string
     * @throws NotFoundHttpException
     * @throws \yii\db\Exception
     */
    public function actionUpdate($id)
    {
        if (request()->post('_asnew') == '1') {
            $model = new Product();
        } else {
            $model = $this->findModel($id);
        }
        if ($model->loadAll(request()->post())) {
            if ($model->saveAll()) {
                set_flash_has_been_saved();
                create_all_term_relationships_of_all_term_type_of_product_type($model->product_type, $model->primaryKey);
                create_all_meta_of_all_product_type_meta($model->product_type, $model->primaryKey);
            } else {
                set_flash_has_not_been_saved();
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);

    }

    /**
     * @param $id
     *
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     * @throws \yii\db\Exception
     */
    public function actionSaveAsNewLanguage($id)
    {
        if (request()->post('_asnew') == '1') {
            $product = $this->findModel($id);
            $model = new Product();
            $model->feature_img = $product->feature_img;
            $model->gallery = $product->gallery;
            $model->status = $product->status;
            $model->comment_status = $product->comment_status;
            $model->rating_status = $product->rating_status;
            $model->quantity = $product->quantity;
            $model->sku = $product->sku;
            $model->assign_with = $product->id;
        } else {
            $model = $this->findModel($id);
        }
        if ($model->loadAll(request()->post())) {
            if ($model->saveAll()) {
                set_flash_has_been_saved();
                create_all_term_relationships_of_all_term_type_of_product_type($model->product_type, $model->primaryKey);
                create_all_meta_of_all_product_type_meta($model->product_type, $model->primaryKey);
            } else {
                set_flash_has_not_been_saved();
            }
        }

        return $this->render('saveAsNewLanguage', [
            'model' => $model,
        ]);
    }

    /**
     * @param $id
     *
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     * @throws \yii\db\Exception
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        if ($model->deleteWithRelated()) {
            delete_seo_data($model->product_type, $model->primaryKey);
            Meta::deleteAll([
                'obj_type' => $model->product_type,
                'obj_id'   => $model->primaryKey,
            ]);
            TermRelationships::deleteAll([
                'obj_type' => $model->product_type,
                'obj_id'   => $model->primaryKey,
            ]);
            set_flash_success_delete_content();
        } else {
            set_flash_error_delete_content();
        }

        return $this->goBack(request()->referrer);
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
            if ($action == ACTION_DELETE) {
                foreach ($ids as $id) {
                    $model = $this->findModel($id);
                    if ($model->deleteWithRelated()) {
                        delete_seo_data($model->product_type, $model->primaryKey);
                        set_flash_success_delete_content();
                    } else {
                        set_flash_error_delete_content();
                    }
                }
            } elseif (in_array($action, [
                STATUS_PENDING,
                STATUS_PUBLIC,
                STATUS_DRAFT,
            ])) {
                foreach ($ids as $id) {
                    $model = $this->findModel($id);
                    $model->status = $action;
                    if ($model->save()) {
                        set_flash_has_been_saved();
                    } else {
                        set_flash_has_not_been_saved();
                    }
                }
            }
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
     * @param $id
     *
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     * @throws \yii\db\Exception
     */
    public function actionSaveAsNew($id)
    {
        $model = new Product();
        if (request()->post('_asnew') != '1') {
            $model = $this->findModel($id);
        }
        if ($model->loadAll(request()->post())) {
            if ($model->saveAll()) {
                set_flash_has_been_saved();
                create_all_term_relationships_of_all_term_type_of_product_type($model->product_type, $model->primaryKey);

                return $this->redirect([
                    'update',
                    'id' => $model->id,
                ]);
            } else {
                set_flash_has_not_been_saved();
            }
        }

        return $this->render('saveAsNew', [
            'model' => $model,
        ]);
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

    /**
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionAddCart()
    {
        if (request()->isAjax) {
            $row = request()->post('Cart');
            if ((request()->post('isNewRecord') && request()->post('_action') == 'load' && empty($row)) || request()->post('_action') == 'add')
                $row[] = [];

            return $this->renderAjax('_formCart', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(t('app', 'The requested page does not exist.'));
        }
    }

    /**
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionAddOrderItem()
    {
        if (request()->isAjax) {
            $row = request()->post('OrderItem');
            if ((request()->post('isNewRecord') && request()->post('_action') == 'load' && empty($row)) || request()->post('_action') == 'add')
                $row[] = [];

            return $this->renderAjax('_formOrderItem', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(t('app', 'The requested page does not exist.'));
        }
    }
}
