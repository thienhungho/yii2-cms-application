<?php

/**
 * @param $key
 * @param $value
 * @param $obj_type
 * @param $obj_id
 *
 * @return bool
 */
function create_meta($key, $value, $obj_type, $obj_id)
{
    $meta = new \common\modules\metas\Meta([
        'obj_type' => $obj_type,
        'obj_id'   => $obj_id,
        'key'      => $key,
        'value'    => $value,
    ]);

    return $meta->save();
}

/**
 * @param $key
 * @param $obj_type
 * @param $obj_id
 *
 * @return string
 */
function get_meta_value($key, $obj_type, $obj_id)
{
    $meta = \common\modules\metas\Meta::find()
        ->where(['key' => $key])
        ->andWhere(['obj_type' => $obj_type])
        ->andWhere(['obj_id' => $obj_id])
        ->asArray()
        ->one();
    if (!empty($meta)) {
        return $meta['value'];
    }

    return null;
}