<?php

class SiteController extends Controller
{
	public function actionIndex()
	{
        $eventModel = new EventModel;
        $newsModel = new NewsModel;

        $arResult['news']['recently'] = $newsModel->recently(3);
        $arResult['events']['recently'] = $eventModel->recently(3);

		$this->render('index', array('arResult'=>$arResult));
	}
        
        public function actionContacts()
        {
            $this->render('contacts');
        }
}