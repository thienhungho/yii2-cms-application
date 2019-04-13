<?php
/**
 * @param $name
 *
 * @return bool
 */
function is_product_type_name($name)
{
    return \thienhungho\ProductManagement\models\ProductType::find()
        ->where(['name' => $name])
        ->exists();
}

/**
 * @param $slug
 *
 * @return bool
 */
function is_product_type_slug($slug)
{
    return \thienhungho\ProductManagement\models\ProductType::find()
        ->where(['slug' => $slug])
        ->exists();
}

/**
 * @param $slug
 *
 * @return mixed
 */
function get_product_type_by_slug($slug)
{
    return \thienhungho\ProductManagement\models\ProductType::find()
        ->where(['slug' => $slug])
        ->one();
}

/**
 * @param $product_type
 * @param $id
 */
function create_all_meta_of_all_product_type_meta($product_type, $id)
{
    \common\modules\metas\Meta::deleteAll([
        'obj_type' => $product_type,
        'obj_id'   => $id,
    ]);
    $metas = get_all_meta_of_product_type($product_type);
    foreach ($metas as $meta) {
        create_meta(
            $meta['name'],
            request()->post('meta_data_' . $meta['name']),
            $product_type,
            $id
        );
    }
}

/**
 * @param $type
 *
 * @return string
 */
function get_product_type_url($type)
{
    return url([
        '/product/product/index',
        'type' => $type,
    ]);
}

/**
 * @param $price
 *
 * @return string
 */
function format_product_price($price)
{
    return number_format($price);
}

/**
 * @param $product_type
 * @param $slug
 *
 * @return string
 */
function get_product_url($product_type, $slug)
{
    return url([
        '/product/product/view',
        'type' => $product_type,
        'slug' => $slug,
    ]);
}

/**
 * @param $product_type
 * @param $term_type
 * @param $slug
 *
 * @return string
 */
function get_product_term_url($product_type, $term_type, $slug)
{
    return url([
        '/product/product/term',
        'product_type' => $product_type,
        'term_type'    => $term_type,
        'slug'         => $slug,
    ]);
}

/**
 * @param $type
 * @param int $limit
 * @param string $data_type
 * @param array $orderBy
 *
 * @return array|\BaseApp\ecommerce\modules\ProductBase\Product[]
 */
function get_all_product($type, $limit = -1, $data_type = DATA_TYPE_ARRAY, $orderBy = ['id' => SORT_DESC])
{
    return \thienhungho\ProductManagement\models\Product::find()
        ->where(['product_type' => $type])
        ->orderBy($orderBy)
        ->limit($limit)
        ->type($type)
        ->dataType($data_type)
        ->all();

}

/**
 * @param string $product_type
 * @param $id
 * @param string $status
 *
 * @return int|string
 */
function count_all_comment_of_product($product_type = 'product', $id, $status = STATUS_PUBLIC)
{
    return count_all_comment_of_obj(
        $product_type . '-' . 'comment',
        $product_type,
        $id,
        $status
    );
}

/**
 * @param $product_type
 * @param $id
 * @param string $status
 * @param int $limit
 * @param string $data_type
 *
 * @return array|\thienhungho\CommentManagement\models\Comment[]|\cmsbase\modules\PostBase\query\Comment[]
 */
function get_all_comment_of_product(
    $product_type = 'product',
    $id, $status = STATUS_PUBLIC,
    $limit = -1,
    $data_type = DATA_TYPE_ARRAY
)
{
    return get_all_comment_of_obj(
        $product_type . '-' . 'comment',
        $product_type,
        $id,
        $status,
        $limit,
        $data_type
    );
}

/**
 * @param $term_type
 * @param $term_id
 * @param $product_type
 *
 * @return array
 */
function get_all_product_id_in_term($term_type, $term_id, $product_type)
{
    return get_all_obj_id_in_term($term_type, $term_id, $product_type);
}

/**
 * @param $product_type
 *
 * @return mixed
 */
function get_all_term_type_of_product_type($product_type)
{
    return \thienhungho\ProductManagement\models\TermOfProductType::find()
        ->select('name')
        ->where(['product_type' => $product_type])
        ->asArray()
        ->all();
}

/**
 * @param $product_type
 *
 * @return mixed
 */
function get_all_meta_of_product_type($product_type)
{
    return \thienhungho\ProductManagement\models\ProductTypeMeta::find()
        ->select('name')
        ->where(['product_type' => $product_type])
        ->asArray()
        ->all();
}