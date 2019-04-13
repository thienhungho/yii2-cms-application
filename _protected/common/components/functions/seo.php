<?php
/**
 * @param array $data
 *
 * @return bool
 */
function create_seo_data($data = [])
{
    $seo = new \common\modules\seo\Seo($data);
    return $seo->save();
}

/**
 * @param $obj_type
 * @param $obj_id
 *
 * @return int
 */
function delete_seo_data($obj_type, $obj_id)
{
    return \common\modules\seo\Seo::deleteAll(['obj_type' => $obj_type, 'obj_id' => $obj_id]);
}