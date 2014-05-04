<?php

class UsersController extends Controller
{
    public function accessRules()
    {
        return array(
            array('deny',
                'actions'=>array('list','detail'),
                'roles'=>array('guest'),
            ),
            array('allow',
                'actions'=>array('add','edit'),
                'roles'=>array('moderator'),
            ),
            array('allow',
                'actions'=>array('delete'),
                'roles'=>array('admin'),
            ),
            array('deny',
                'users'=>array('*')
            ),
        );
    }

    public function actions() {
        return array(
            'create' => 'application.controllers.crud.ActionCreate',
            'update' => 'application.controllers.crud.ActionUpdate',
            'delete' => 'application.controllers.crud.ActionDelete',
            'read'   => 'application.controllers.crud.ActionRead'
        );
    }

    public function actionList() {
        $arResult['list'] = UsersModel::model()->findAll();

        $this->render('list', array('arResult' => $arResult));
    }

    public function actionDetail($id) {
        $arResult['data'] = UsersModel::model()->findByPk($id);

        $this->render('detail', array('arResult' => $arResult));
    }
}