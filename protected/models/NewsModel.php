<?php

class NewsModel extends CActiveRecord
{
    public $tempData = array();
	public $image;

	public function recently($limit=3)
	{
		$criteria = new CDbCriteria;
		$criteria->select = 'id_news, header, date_publication, preview, text_description';
		$criteria->order = 'date_publication DESC';
		$criteria->limit = $limit;
		return $this->findAll($criteria);
	}
	
	public function relations()
	{
		return array(
			'iscategory' =>array(self::BELONGS_TO, 'NewsCategory', 'category')
		);
	}
	
    public function tableName() {
        return 'News';
    }
    
    public function rules() {
        
        return array(
			array('image', 'file', 'types'=>'jpg, gif, png'),
        );
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

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }
    
}
