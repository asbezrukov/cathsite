<?php

class EmployeeModel extends CActiveRecord
{

    public function tableName() {
        return 'Employee';
    }
    
    public function rules() {
        
        return array(
            
        );
    }
    
    public static function model($className=__CLASS__) {
        return parent::model($className);
    }
    
}