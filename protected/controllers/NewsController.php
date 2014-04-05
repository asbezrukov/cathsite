<?php 

class NewsController extends Controller
{
	public function actionIndex()
	{
		$model = new NewsModel();
		$arResult['recently'] = $model->recently(3);
	
	
		$this->render('index', array('arResult'=>$arResult));
	}
	
	public function actionList()
	{
	$criteria = new CDbCriteria();
	$count = NewsModel::model()->count($criteria);
		$pages = new CPagination($count); 
		$pages->pageSize = 10;
        $pages->applyLimit($criteria);

        $arResult['pages'] = $pages;
        $data = $model->recently();
        $dataProvider = new CActiveDataProvider($model);
        $dataProvider->setData($data);
		$arResult['dataProvider'] = $dataProvider;
        $this->render('list', array('arResult'=>$arResult));
	}
	
	    public function actionGrid() 
	{
	
    }
	
	public function actionDetail()
	{
		$this->render('Detail');	
	}
}