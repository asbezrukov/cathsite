<?php 

class NewsController extends Controller
{
	public function actionIndex()
	{
		$this->render('Index');
	}
	
	public function actionDetail($id)
	{
		$this->render('Detail');	
	}
}