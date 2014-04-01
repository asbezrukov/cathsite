<?php

class EmployeeModel extends CActiveRecord
{


 public $tempData = array();
 public $image;
	
	public function photo($limit=3)
	{
		$criteria=new CDbCriteria;
		$criteria->select='id, fio';
		$criteria->condition='photo != null';
        $criteria->order='id rand()';
		$criteria-> limit=$limit;		
		return $this->findAll($criteria);
	}

     public function sortFIO()
	{
		$criteria=new CDbCriteria;
		$criteria->select='id, fio';
		$criteria->order='fio DESC';
	    return $this->findAll($criteria);
		
	}


    public function tableName() {
        return 'Employee';
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