<?php

class EventModel extends CActiveRecord
{
    public $tempData = array();
	public $image;

	public function recently($limit=1, $past=null)
	{
		$criteria=new CDbCriteria;
		$criteria->select='id_event, name_event, hold_date, text_description';
		$criteria->order='hold_date DESC';
		$criteria->limit=$limit;
		if($past != null)
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
				self::BELONGS_TO, 'EventCategory', 'id_category')
			)
		)
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
