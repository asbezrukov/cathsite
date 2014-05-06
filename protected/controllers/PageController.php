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

    public function actionIndex($category=null)
    {
        $this->render('index', array('category'=>$category));
    }
	
	public function actionCreate()
    {
		$page=new PagesModel;
		$page->title=$_POST["title"];
		$page->content=$_POST["content"];
		$page->save();
        $this->redirect('/');
    }
}