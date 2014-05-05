<?php

class PageController extends Controller
{
    public function actions() {
        return array(
            'create' => 'application.controllers.crud.ActionCreate',
            'update' => 'application.controllers.crud.ActionUpdate',
            'delete' => 'application.controllers.crud.ActionDelete'
        );
    }

    public function actionIndex()
    {
        $this->render('index');
    }
	
	public function actionCreate()
    {
        $this->render('create', array('data'=>$_POST));
    }
}