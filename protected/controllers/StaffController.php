<?php 

class StaffController extends Controller
{
	
	public function actionList()
	{
	$criteria = new CDbCriteria();
	$count = EmployeeModel::model()->count($criteria);
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
	
	
	public function actionDetail()
	{
		$this->render('Detail');	
	}
}