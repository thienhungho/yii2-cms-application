<?php

namespace common\modules\metas;

use Yii;
use \common\modules\metas\base\Meta as BaseMeta;

/**
 * This is the model class for table "meta".
 */
class Meta extends BaseMeta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['obj_id', 'obj_type', 'key'], 'required'],
            [['obj_id', 'created_by', 'updated_by'], 'integer'],
            [['value'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['obj_type', 'key'], 'string', 'max' => 255]
        ]);
    }
	
}
