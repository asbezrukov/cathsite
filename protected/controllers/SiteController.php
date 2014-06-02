<?php

class SiteController extends Controller
{

	public function actionIndex()
	{
        $eventModel = new EventModel;
        $newsModel = new NewsModel;
        $employeeModel = new EmployeeModel();
        $classifieds = new ClassifiedsModel();

        $arResult['news']['recently'] = $newsModel->recently(3);
        $arResult['events']['recently'] = $eventModel->recently(3);
        $arResult['random_employees'] = $employeeModel->getEmployees(3, true);
        $arResult['classifieds'] = $classifieds->findAll();

        $this->render('index', array('arResult'=>$arResult));
	}
        
    public function actionContacts()
    {
        $this->render('contacts');
    }

    public function actionLogin() {

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $identity = new UserIdentity($_POST['username'], $_POST['password']);

            if ($identity->authenticate()) {
                Yii::app()->user->login($identity);
                $this->redirect('/');
            } else {
                echo $identity->errorMessage;
            }
        }

        $this->render('login');
    }

    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect('/');
    }

    public function actionError()
    {
        if($error=Yii::app()->errorHandler->error)
        {
            if(Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }
}