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
        $idField = "idPage";
        $nameField = "title";
        $modelType = "page";
        $this->render('list', array(
            'arResult'=>$data,
            'idField'=>$idField,
            'nameField'=>$nameField,
            'modelType'=>$modelType
            )
        );
    }

    public function actionNews()
    {
        $data = NewsModel::model()->findAll();
        $idField = "id_news";
        $nameField = "header";
        $modelType = "news";
        $this->render('list', array(
                'arResult'=>$data,
                'idField'=>$idField,
                'nameField'=>$nameField,
                'modelType'=>$modelType
            )
        );
    }

    public function actionEvents()
    {
        $data = EventModel::model()->findAll();
        $idField = "id_event";
        $nameField = "name_event";
        $modelType = "event";
        $this->render('list', array(
                'arResult'=>$data,
                'idField'=>$idField,
                'nameField'=>$nameField,
                'modelType'=>$modelType
            )
        );
    }

    public function actionStaff()
    {
        $data = EmployeeModel::model()->findAll();
        $idField = "id";
        foreach ($data as $index=>$item) {
            $data[$index]->name = $item->name . ' ' . $item->patronymic;
        }
        $nameField = "name";
        $modelType = "staff";
        $this->render('list', array(
                'arResult'=>$data,
                'idField'=>$idField,
                'nameField'=>$nameField,
                'modelType'=>$modelType
            )
        );
    }

    public function actionClassifieds()
    {
        $data = ClassifiedsModel::model()->findAll();
        $idField = "id_classifieds";
        $nameField = "header";
        $modelType = "classifieds";
        $this->render('list', array(
                'arResult'=>$data,
                'idField'=>$idField,
                'nameField'=>$nameField,
                'modelType'=>$modelType
            )
        );
    }
}