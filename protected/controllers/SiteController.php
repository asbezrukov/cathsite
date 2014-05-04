<?php

class SiteController extends Controller
{
    public function actionTest() {
        print_r(UsersModel::model()->findAll());
    }

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

    public function actionCurrentLogin() {
        $this->actionLogin(null, null);
    }

    public function actionLogin($u, $p) {

        if ($u==null && $p==null) {
            echo "Текущий пользователь: " . Yii::app()->user->name . '<br>';
            echo 'Форма авторизации...';
            return;
        }
        $identity = new UserIdentity($u, $p);

        if ($identity->authenticate()) {
            Yii::app()->user->login($identity);
        } else {
            echo $identity->errorMessage;
        }

        echo "Пользователь " . Yii::app()->user->name . " авторизован. Роль: " . Yii::app()->user->role;
    }

    public function actionLogout() {
        Yii::app()->user->logout();
        echo "Выход...";
    }
}