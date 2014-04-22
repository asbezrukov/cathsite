<?php

class NewsCategoryModel extends CActiveRecord
{

    public $tempData = array();

    public function tableName()
    {
        return 'NewsCategory';
    }

    public function rules()
    {
        return array();
    }

    public function relations()
    {
        return array(
			'news_list' =>array(self::HAS_MANY, 'News','category','on' => "YEAR(date_publication) >= ".(date('Y') - 2))
		);
    }

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
	/**
	* @return array()
	*/
	public function category(){
		 $categories = new CActiveDataProvider('NewsCategory', array(
         'criteria' => array(                    
                    'order' => "t.nc_name ASC",
                ),
                'pagination' => FALSE
            ));
		return $categories->GetData();
		/*
		* чтобы получить список новостей for controller
		*
		* foreach ($categories as $val) // перебираем все категории
		* {
		* 		$news = $val->news_list;
		* }
		*/
	}
}