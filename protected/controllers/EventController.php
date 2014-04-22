<?php

class EventController extends Controller
{
    public $listAction   = 'list';
    public $detailAction = 'single';

    public function actions() {
        return array(
            'create' => 'application.controllers.crud.ActionCreate',
            'update' => 'application.controllers.crud.ActionUpdate',
            'delete' => 'application.controllers.crud.ActionDelete'
        );
    }

    public function actionIndex()
    {
        $model = new EventModel;

        $arResult['recently'] = $model->recently(3, true);

        $this->render('index', array('arResult'=>$arResult));
    }

    public function actionList()
    {
        $criteria = new CDbCriteria;
        $model = new EventModel;

        $pages = new CPagination($model->count($criteria));
        $pages->pageSize = 3;
        $pages->applyLimit($criteria);

        $dataRecently = $model->recently(6, true);

        $data = $model->findAll($criteria);
        foreach ($data as $i=>$item) {
            $data[$i]->category = $model->findByPk($item->id_event)->category;
        }

        $dataProvider = new CActiveDataProvider($model);
        $dataProvider->setData($data);

        $arResult['category'] = $model->getAllCategories();
        $arResult['pages'] = $pages;
        $arResult['recently'] = $dataRecently;
        $arResult['dataProvider'] = $dataProvider;

        $this->render('list', array('arResult'=>$arResult));
    }

    public function actionSingle($id)
    {
        $model = new EventModel();
        $data = $model->findByPk($id);
        $data['category'] = $data->category;

        $arResult['data'] = $data;
        $arResult['category'] = $model->getAllCategories();
        $arResult['recently'] = $model->recently(6, true);
        $this->render('single', array('arResult'=>$arResult));
    }
}