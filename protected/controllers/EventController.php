<?php

class EventController extends Controller
{
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

        $arResult['category'] = EventCategoryModel::model()->findAll();
        $arResult['pages'] = $pages;
        $arResult['recently'] = $dataRecently;
        $arResult['dataProvider'] = $dataProvider;

        $this->render('list', array('arResult'=>$arResult));
    }

    public function actionGrid()
    {
    }

    public function actionSingle($id)
    {
        $model = new EventModel();
        $data = $model->findByPk($id);
        $data['category'] = $data->category;
        $category = EventCategoryModel::model()->findAll();
        $dataRecently = $model->recently(6, true);

        $arResult['data'] = $data;
        $arResult['category'] = $category;
        $arResult['recently'] = $dataRecently;
        $this->render('single', array('arResult'=>$arResult));
    }

}