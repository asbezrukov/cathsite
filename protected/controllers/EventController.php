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
        $pages->pageSize = 5;
        $pages->applyLimit($criteria);

        $model = new EventModel();
        $arResult['recently'] = $model->recently(3);

        $arResult['pages'] = $pages;
        $data = EventModel::model()->findAll($criteria);
        //$data = $model->recently();
        $dataProvider = new CActiveDataProvider($model);
        $dataProvider->setData($data);
		
		$arResult['dataProvider'] = $dataProvider;
		
        $this->render('list', array('arResult'=>$arResult));
    }

    public function actionGrid() {
    }

    public function actionDetail($id) {
        $criteria = new CDbCriteria();
        $model = new EventModel();

        $criteria->condition = "id_event = :p1";
        $criteria->params = array('p1'=>$id);

        $arResult['data'] = $model->findAll($criteria);

        $this->render('detail', array('arResult'=>$arResult));
    }

}