<?php

class DisciplinesFilesModel extends CActiveRecord 
{

	public $tempData = array();

	public function tableName()
	{
	return 'DisciplinesFiles';
	}

	
	public function rules()
	{
	return array();
	}
	
	public function relations()
		{
		return array();
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
}