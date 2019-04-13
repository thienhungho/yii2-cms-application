<?php

namespace api\modules\v1\models;

use common\modules\terms\TermType;
use yii\helpers\Url;
use yii\web\Link;
use yii\web\Linkable;

class TermTypeResource extends TermType implements Linkable
{
    /**
     * @return array
     */
    public function fields()
    {
        return [
            'id',
            'name',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
        ];
    }

    /**
     * @return array
     */
    public function extraFields()
    {
        return [];
    }

    /**
     * @return array
     */
    public function getLinks()
    {
        return [
            Link::REL_SELF => Url::to(['user/view', 'id' => $this->id], true),
            'index'        => Url::to(['term-types/index'], true),
            'created_by'   => Url::to(['user/view','id' => $this->created_by], true),
            'updated_by'   => Url::to(['user/view','id' => $this->updated_by], true),
        ];
    }
}