<?php

class EmployeeModel extends CActiveRecord
{
	public $tempData = array();
	public $image;
	
	public function getEmployees($limit=null, $random=false)
	{
		$criteria=new CDbCriteria;
		$criteria->select='id, surname, name, patronymic, photo, rank, degree, position, consult_time';
		if($random)
		{
			$criteria->condition='photo is not null';
			$criteria->order='rand()';
		}
		else
		{
			$criteria->order='surname ASC';
		}
		if(isset($limit))
		{
			$criteria->limit=$limit;		
		}
		return $this->findAll($criteria);
	}

    public function tableName() {
        return 'Employee';
    }

    public function imageFieldName()
    {
        return 'photo';
    }

    public function getImageUrl() {
        if (empty($this->photo))
            return false;
        return Yii::app()->baseUrl."/protected/upload/".$this->photo;
    }

    public function rules() {
        
        return array(

			array('photo', 'file', 'types'=>'jpg, gif, png'),
        );
    }   

    public function beforeSave()
    {
        $this->setAttributes($this->tempData, false);
        if (isset($this->image)) {
            $this->image->saveAs(Yii::app()->basePath.'/upload/'.$this->image->name);
            $this->photo = $this->image->name;
        }

        if ($this->validate()) {
            return true;
        } else {
            return false;
        }
    }

    public function afterSave() {
        unset($this->tempData);
    }

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }
}