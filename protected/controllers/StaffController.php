<?php 

class StaffController extends Controller
{
	
	public function actionList()
	{
	    $criteria = new CDbCriteria();
        $model = new EmployeeModel();

	    $count = $model->count($criteria);
		$pages = new CPagination($count); 
		$pages->pageSize = 20;
        $pages->applyLimit($criteria);

        $data = $model->findAll($criteria);
        $dataProvider = new CActiveDataProvider($model);
        $dataProvider->setData($data);

        $arResult['pages'] = $pages;
		$arResult['dataProvider'] = $dataProvider;
        $this->render('list', array('arResult'=>$arResult));
	}
	
	public function actionDetail($id)
	{
        $model = new EmployeeModel();

        $data = $model->findByPk($id);

        $arResult['data'] = $data;
		$this->render('Detail');	
	}
}