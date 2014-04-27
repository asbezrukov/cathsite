<?php

class UsersController extends Controller
{
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