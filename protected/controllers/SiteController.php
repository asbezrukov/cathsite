<?php

class SiteController extends Controller
{
	public function actionIndex()
	{
        $model = new EventModel;

        $arResult['recently'] = $model->recently(3, true);

		$this->render('index', array('arResult'=>$arResult));
	}
        
    public function actionContacts()
    {
        $this->render('contacts');
    }
}