<?php

class NewsModel extends CActiveRecord 
{
	public $image;
	public $tempData = array();
	
	public function last_news($limit = 3)
	{
		
		$criteria = new CDbCriteria;
		$criteria->select = 'id_news, header, date_publication, preview, text_description';
		$criteria->order = 'date_publication DESC';
		$criteria->limit = $limit;
		$this->setDbCriteria($criteria);
		return $this->findAll($criteria);
		
		
		/* $news = new CActiveDataProvider('News', array(
			'select' => 'id_news, header, date_publication, preview, text_description',
			'criteria' => array(                    
				'order' => "t.date_publication DESC",
			),
			'limit' => $limit,
			'pagination' => FALSE
        ));
		return $news->GetData();*/
	}
	
	
	public function tableName()
	{
		return 'News';
	}
	
	public function rules()
	{
		return array('image', 'file', 'types'=>'jpg, gif, png'),
	}
	
	public function relations()
	{
		return array(
			'iscategory' =>array(self::BELONG_TO, 'NewsCategory', 'category')
		);
	}
	/*
	* чтобы получить категорию for controller
	*
	* foreach ($news as $val) // перебираем все категории
	* {
	* 		$category = $val->iscategory;
	* }
	*/
	
	public function attributeLabels()
	{
		return array();
	}
	
	public function search()
	{	
	}
		
	public function beforeSave() {

		if ($this->validate())
			return true;
	else
		return false;
    }

	public function afterSave() {
			unset($this->tempData);
    }
		
	public static function model ($className=__CLASS__)
	{
		return parent::model($className);
	}
}