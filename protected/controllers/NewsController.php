<?php 

class NewsController extends Controller
{
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

        $arResult['category'] = NewsCategoryModel::model()->findAll();
        $arResult['pages'] = $pages;
        $arResult['recently'] = $dataRecently;
        $arResult['dataProvider'] = $dataProvider;

        $this->render('list', array('arResult'=>$arResult));
    }
	
	public function actionDetail($id)
	{
        $arResult['data'] = NewsModel::model()->findByPk($id);
        $arResult['category'] = NewsCategoryModel::model()->findAll();
		$this->render('detail', array('arResult'=>$arResult));
	}
}