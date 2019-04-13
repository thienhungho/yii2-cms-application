<?php

namespace api\modules\v1\models;

use yii\helpers\Url;
use yii\web\Link;
use yii\web\Linkable;

class UserResource extends \thienhungho\UserManagement\models\User implements Linkable
{
    /**
     * @return array
     */
    public function fields()
    {
        return [
            'id',
            'username',
            'email',
            'phone',
            'full_name',
            'job',
            'company',
            'tax_number',
            'address',
            'avatar',
            'facebook_url',
            'bio',
            'birth_date',
            'created_at',
            'updated_at',
            'status',
        ];
    }

    /**
     * @return array
     */
    public function getLinks()
    {
        return [
            Link::REL_SELF => Url::to(['user/view', 'id' => $this->id], true),
            'index' => Url::to(['user/index'], true),
        ];
    }
}