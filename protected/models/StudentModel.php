<?php
class StudentModel extends CActiveRecord
{
    public function tableName() {
        return 'Student';
    }
    
    public function rules() {
        
        return array(
            
        );
    }
    
    public static function model($className=__CLASS__) {
        return parent::model($className);
    } 
}
