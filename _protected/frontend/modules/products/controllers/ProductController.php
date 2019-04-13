<?php

namespace frontend\modules\products\controllers;

use thienhungho\ProductManagement\modules\ProductManage\search\ProductSearch;
use thienhungho\ProductManagement\models\Product;
use common\modules\seo\Seo;
use thienhungho\TermManagement\models\Term;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `PostModule` module
 */
class ProductController extends Controller
{
    /**
     * @param string $slug
     *
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionIndex($slug = 'product')
    {
        /**
         * Check If Post Type Exists
         */
        if (!is_product_type_slug($slug)) {
            throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
        }
        $product_type = \thienhungho\ProductManagement\models\ProductType::find()
            ->where(['slug' => $slug])
            ->one();
        $type = $product_type->name;
        /**
         * Get Seo Data and generate Seo meta tag
         */
        $seo = new Seo([
            'title' => $type,
            'slug' => Yii::$app->request->url,
            'description' => $type,
            'social_title' => $type,
            'social_description' => $type,
        ]);
        $seo->generateSeoMetaTag(['og_locale' =>Yii::$app->language, 'og_type' => $type]);
        /**
         * Render
         */
        $searchModel = new ProductSearch();
        $queryParams = Yii::$app->request->queryParams;
        $queryParams['ProductSearch']['product_type'] = $type;
        $dataProvider = $searchModel->search($queryParams);
        $dataProvider->pagination->pageSize = request()->get('per-page', 10);
        $dataProvider->sort->defaultOrder = ['id' => SORT_DESC];

        return $this->render('index', [
            'type'         => $type,
            'searchModel'  => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * @param string $product_type_slug
     * @param $product_slug
     *
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionView($product_type_slug = 'product', $product_slug)
    {
        /**
         * Check If Post Type Exists
         */
        if (!is_product_type_slug($product_type_slug)) {
            throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
        }
        $product_type = \thienhungho\ProductManagement\models\ProductType::find()
            ->where(['slug' => $product_type_slug])
            ->one();
        $type = $product_type->name;

        $model = Product::find()->where(['slug' => $product_slug])->andWhere(['product_type' => $type])->one();
        if (!empty($model)) {
            $seo = Seo::find()->where(['obj_id' => $model->primaryKey])->andWhere(['obj_type' => $model->product_type])->one();
            if (!empty($seo)) {
                $seo->generateSeoMetaTag(['og_locale' => $model->language, 'og_type' => $model->product_type]);
            }
            return $this->render('view', [
                'model' => $model,
            ]);
        } else {
            throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
        }
    }

    /**
     * @param string $product_type
     * @param $term_type
     * @param $slug
     *
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionTerm($product_type = 'post', $term_type, $slug)
    {
        /**
         * Check If Post Type Exists
         */
        if (!is_product_type_name($product_type)) {
            throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
        }
        /**
         * Check If Term Exits
         */
        $term = Term::find()->where(['slug' => $slug])->andWhere(['term_type' => $term_type])->one();
        if (!empty($term)) {
            $seo = Seo::find()
                ->where(['obj_id' => $term->primaryKey])
                ->andWhere(['obj_type' => $term->term_type])
                ->one();
            if (!empty($seo)) {
                $seo->generateSeoMetaTag(['og_locale' => $term->language, 'og_type' => $product_type]);
            }

            $dataProvider = new ActiveDataProvider([
                'query' => Product::find()
                    ->where(['in', 'id', get_all_obj_id_in_term(
                        $term_type,
                        $term->id,
                        $product_type
                    )]),
                'pagination' => [
                    'pageSize' => 20,
                ],
            ]);
            $dataProvider->sort->defaultOrder = ['id' => SORT_DESC];

            return $this->render('term', [
                'term'         => $term,
                'type'         => $product_type,
                'dataProvider' => $dataProvider,
            ]);

        } else {
            throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
        }
    }
}
