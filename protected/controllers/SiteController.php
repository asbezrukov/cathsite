<?php

class SiteController extends Controller
{
	public function actionIndex()
	{
        $eventModel = new EventModel;
        $newsModel = new NewsModel;
        $employeeModel = new EmployeeModel();
        
        $arResult['news']['recently'] = $newsModel->recently(3);
        $arResult['events']['recently'] = $eventModel->recently(3);
        $arResult['random_employees'] = $employeeModel->getEmployees(3, true);

        $this->render('index', array('arResult'=>$arResult));
	}
        
        public function actionContacts()
        {
            $this->render('contacts');
        }
}