<?php

class SiteController extends Controller
{
	public function actionIndex()
	{
        $model = new NewsModel;
        $arResult['news']['recently'] = $model->recently(3);

        $this->render('index', array('arResult'=>$arResult));
	}
        
    public function actionContacts()
    {
        $this->render('contacts');
    }
}