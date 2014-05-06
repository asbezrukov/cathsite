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
		$page->p_name=$_POST["p_name"];
		$page->category=$_POST["category"];
		$page->content=$_POST["content"];
		$page->save();
        $this->redirect('/');
    }
	
	public function actionShow($p_name)
	{
		$page = new PagesModel;
		$page = PagesModel::model()->find(array('condition'=>'p_name = "'.$p_name.'"'));
		$this->render('show', array('page'=>$page));
	}
	
	public function actionDelete($p_name)
    {
		$page=new PagesModel;
		$page=PagesModel::model()->find(array('condition'=>'p_name = "'.$p_name.'"'));
		$page->delete();
        $this->redirect('/');
    }
	
	public function actionUpdate($p_name)
    {
		$page=new PagesModel;
		$page=PagesModel::model()->find(array('condition'=>'p_name = "'.$p_name.'"'));
        $this->render('update', array('page'=>$page));
    }
	
	public function actionSave($p_name)
    {
		$page=new PagesModel;
		$page=PagesModel::model()->find(array('condition'=>'p_name = "'.$p_name.'"'));
		$page->title=$_POST["title"];
		$page->p_name=$_POST["p_name"];
		$page->category=$_POST["category"];
		$page->content=$_POST["content"];
		$page->save();
        $this->redirect('/');
    }
}