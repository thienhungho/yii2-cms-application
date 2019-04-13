<?php

namespace api\modules\v1\models;

use cmsbase\modules\PostBase\Post;
use yii\helpers\Url;
use yii\web\Link;
use yii\web\Linkable;

class PostResource extends Post implements Linkable
{
    /**
     * @return array
     */
    public function fields()
    {
        return [
            'id',
            'title',
            'slug',
            'content',
            'feature_img',
            'status',
            'comment_status',
            'post_parent_id' => 'post_parent',
            'post_type',
            'language',
            'assign_with_id' => 'assign_with',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
            'author_id' => 'author'
        ];
    }

    /**
     * @return array
     */
    public function extraFields()
    {
        return [
            'post_parent_data' => function($model) {
                if ($model->post_parent != 0) {
                    return PostResource::find()
                        ->where(['id' => $model->post_parent])
                        ->one();
                }
                return null;
            },
            'post_type_data' => function($model) {
                return PostTypeResource::find()
                    ->where(['name' => $model->post_type])
                    ->one();
            },
            'assign_with_data' => function($model) {
                if ($model->assign_with != 0) {
                    return PostResource::find()
                        ->where(['id' => $model->assign_with])
                        ->one();
                }
                return null;
            },
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
            Link::REL_SELF => Url::to(['user/view', 'id' => $this->id], true),
            'index' => Url::to(['post/index'], true),
            'author'       => Url::to(['user/view','id' => $this->author], true),
            'created_by'   => Url::to(['user/view','id' => $this->created_by], true),
            'updated_by'   => Url::to(['user/view','id' => $this->updated_by], true),
        ];
    }
}