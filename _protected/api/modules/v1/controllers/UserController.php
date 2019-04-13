<?php

namespace api\modules\v1\controllers;

use api\controllers\ApiBaseController;

class UserController extends ApiBaseController
{
    public $modelClass = 'api\modules\v1\models\UserResource';
}