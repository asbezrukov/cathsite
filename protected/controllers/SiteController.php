<?php

class SiteController extends Controller
{
	public function actionIndex()
	{
        $model = new EmployeeModel();

        $arResult['random_employees'] = $model->getEmployees(3, true);

		$this->render('index', array('arResult'=>$arResult));
	}

    public function actionContacts()
    {
        $this->render('contacts');
    }
}