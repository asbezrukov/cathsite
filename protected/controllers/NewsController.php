<?php 

class NewsController extends Controller
{
    public $detailAction = 'detail';
    public $listAction   = 'list';

    public function actions() {
        return array(
            'create' => 'application.controllers.crud.ActionCreate',
            'update' => 'application.controllers.crud.ActionUpdate',
            'delete' => 'application.controllers.crud.ActionDelete'
        );
    }
	public function actionList()
	{
        $criteria = new CDbCriteria;
        $model = new NewsModel;

        $pages = new CPagination($model->count($criteria));
        $pages->pageSize = 20;
        $pages->applyLimit($criteria);

        $dataRecently = $model->recently(3);

        $data = $model->findAll($criteria);
        foreach ($data as $i=>$item) {
            $data[$i]->category = $model->findByPk($item->id_news)->news_category;
        }

        $dataProvider = new CActiveDataProvider($model);
        $dataProvider->setData($data);

        $arResult['category'] = $model->getAllCategories();
        $arResult['pages'] = $pages;
        $arResult['recently'] = $dataRecently;
        $arResult['dataProvider'] = $dataProvider;

        $this->render('list', array('arResult'=>$arResult));
    }

    public function actionDetail($id)
    {
        $criteria = new CDbCriteria;
        $model = new NewsModel;

        $pages = new CPagination($model->count($criteria));
        $pages->pageSize = 1;
        $pages->setCurrentPage($id);
        $pages->applyLimit($criteria);

        $arResult['pages'] = $pages;
        $arResult['data'] = NewsModel::model()->findByPk($id);

        $arResult['category'] = $model->getAllCategories();
        $this->render('detail', array('arResult'=>$arResult));
    }
}