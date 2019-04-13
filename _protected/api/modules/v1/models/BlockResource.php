<?php

namespace api\modules\v1\models;

use common\modules\blocks\Block;
use yii\helpers\Url;
use yii\web\Link;
use yii\web\Linkable;

class BlockResource extends Block implements Linkable
{
    /**
     * @return array
     */
    public function fields()
    {
        return [
            'id',
            'name',
            'content',
            'language',
            'assign_with',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
            'author',
        ];
    }

    /**
     * @return array
     */
    public function extraFields()
    {
        return [
            'author_data' => function($model) {
                return UserResource::find()
                    ->where(['id' => $model->author])
                    ->one();
            },
        ];
    }

    /**
     * @return array
     */
    public function getLinks()
    {
        return [
            Link::REL_SELF => Url::to(['block/view','id' => $this->id], true),
            'index'        => Url::to(['block/index'], true),
            'author'       => Url::to(['user/view','id' => $this->author], true),
            'created_by'   => Url::to(['user/view','id' => $this->created_by], true),
            'updated_by'   => Url::to(['user/view','id' => $this->updated_by], true),
        ];
    }
}