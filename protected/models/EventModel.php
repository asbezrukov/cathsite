<?php

class EventModel extends CActiveRecord
{
    public $tempData = array();
	public $image;

	public function recently($limit=null, $past=null)
	{
		$criteria=new CDbCriteria;
		$criteria->select='id_event, name_event, hold_date, text_description';
		$criteria->order='hold_date DESC';
		if(isset($limit))
		{
			$criteria->limit=$limit;
		}
		if(isset($past))
		{
			$criteria->condition=$past?'hold_date < :p1':'hold_date > :p1';
			$criteria->params=array('p1'=>CDbExpression('NOW()'));
		}
		return $this->findAll($criteria);
	}
	
	public function relations()
	{
		return array(
			'category'=>array(
				self::BELONGS_TO, 'EventCategoryModel', 'id_category')
			);
	}
	
    public function tableName() {
        return 'Event';
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
