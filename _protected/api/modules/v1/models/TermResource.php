<?php

namespace api\modules\v1\models;

use common\modules\terms\Term;
use yii\helpers\Url;
use yii\web\Link;
use yii\web\Linkable;

class TermResource extends Term implements Linkable
{
    /**
     * @return array
     */
    public function fields()
    {
        return [
            'id',
            'name',
            'slug',
            'description',
            'author',
            'feature_img',
            'term_parent',
            'term_type',
            'term_type_data' => function($model) {
                return TermTypeResource::find()
                    ->andWhere(['name' => $model->term_type])
                    ->one();
            },
            'language',
            'assign_with',
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
            'index' => Url::to(['term/index'], true),
            'created_by'   => Url::to(['user/view','id' => $this->created_by], true),
            'updated_by'   => Url::to(['user/view','id' => $this->updated_by], true),
        ];
    }
}