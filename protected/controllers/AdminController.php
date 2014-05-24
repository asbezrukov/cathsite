<?php

class AdminController extends Controller
{
    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',
                'actions'=>array('pages'),
                'roles'=>array('contentManager')
            ),
            array('allow',
                'actions'=>array('events'),
                'roles'=>array('eventManager')
            ),
            array('allow',
                'actions'=>array('news'),
                'roles'=>array('newsManager')
            ),
            array('allow',
                'actions'=>array('staff'),
                'roles'=>array('staffManager')
            ),
            array('allow',
                'actions'=>array('classifieds'),
                'roles'=>array('notesManager')
            ),
            array('deny')
        );
    }

    public function actionPages()
    {
        $data = PagesModel::model()->findAll();
        $this->render('index', array('arResult'=>$data));
    }

    public function actionNews()
    {
        $data = NewsModel::model()->findAll();
        $this->render('index', array('arResult'=>$data));
    }

    public function actionEvents()
    {
        $data = EventModel::model()->findAll();
        $this->render('index', array('arResult'=>$data));
    }

    public function actionStaff()
    {
        $data = EmployeeModel::model()->findAll();
        $this->render('index', array('arResult'=>$data));
    }

    public function actionClassifieds()
    {
        $data = ClassifiedsModel::model()->findAll();
        $this->render('index', array('arResult'=>$data));
    }
}