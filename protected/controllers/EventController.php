<?php

class EventController extends Controller {

    public function actionIndex() {
        $model = new EventModel();

        $arResult['recently'] = $model->recently(3);

        $this->render('index', array('arResult'=>$arResult));
    }

    public function actionList() {
        $criteria = new CDbCriteria();
        $count = EventModel::model()->count($criteria);

        $pages = new CPagination($count);
        $pages->pageSize = 10;
        $pages->applyLimit($criteria);

        $model = new EventModel();
        $arResult['recently'] = $model->recently(3);

        $arResult['pages'] = $pages;
        $data = EventModel::model()->findAll($criteria);

        $arResult['dataProvider'] = new CArrayDataProvider($data);

        $this->render('list', array('arResult'=>$arResult));
    }

    public function actionGrid() {
    }

    public function actionDetail() {
    }

}