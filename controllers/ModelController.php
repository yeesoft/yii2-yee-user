<?php

namespace yeesoft\user\controllers;

use yeesoft\controllers\CrudController;

class ModelController extends CrudController
{

    /**
     * @var \yeesoft\models\AuthModel
     */
    public $modelClass = 'yeesoft\models\AuthModel';

    /**
     * @var \yeesoft\user\models\AuthModelSearch
     */
    public $modelSearchClass = 'yeesoft\user\models\AuthModelSearch';

    /**
     * @inheritdoc
     */
    protected function getRedirectPage($action, $model = null)
    {

        switch ($action) {
            case 'delete':
                return ['index'];
                break;
            case 'update':
                return ['update', 'id' => $model->{$this->modelPrimaryKey}];
                break;
            case 'create':
                return ['update', 'id' => $model->{$this->modelPrimaryKey}];
                break;
            default:
                return ['index'];
        }
    }

}
