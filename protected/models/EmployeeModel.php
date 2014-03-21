<?php

class EmployeeModel extends CActiveRecord
{
    
    public function tableName() {
        return 'employee';
    }
    
    public function rules() {
        
        return array(
            
        );
    }
    
    public static function model($className=__CLASS__) {
        return parent::model($className);
    }
    
}
