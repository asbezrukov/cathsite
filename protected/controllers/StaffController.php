<?php 

class StaffController extends Controller
{

	public function actionIndex()
	{
		$model = new EmployeeModel();
		$arResult['recently'] = $model->recently(3);
	
	
		$this->render('index', array('arResult'=>$arResult));
	}
	
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
	
	public function actionGrid()
	{
	 
    }
	
	public function actionDetail($id)
	{
        $model = new EmployeeModel();

        $data = $model->findByPk($id);

        $arResult['data'] = $data;
		$this->render('Detail');	
	}
}