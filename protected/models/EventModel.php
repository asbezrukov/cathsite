<?php

class EventModel extends CActiveRecord
{
    public $tempData = array();
	public $image;

	public function recently($limit=1)
	{
		$criteria=new CDbCriteria;
		$criteria->select='id_event, name_event, hold_date, text_description';
		$criteria->order='hold_date DESC';
		$criteria->limit=$limit;
		$this->setDbCriteria($criteria);
		return $this;
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
