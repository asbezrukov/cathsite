<?php
StudentModel extends CActiveRecord
{
       public function tableName() {
        return 'student';
    }
    
    public function rules() {
        
        return array(
            
        );
    }
    
    public static function model($className=__CLASS__) {
        return parent::model($className);
    } 
}
