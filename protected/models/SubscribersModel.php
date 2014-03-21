<?php
class SubscribersModel extends CActiveRecord
{
       public function tableName() {
        return 'subscribers';
    }
    
    public function rules() {
        
        return array(
            
        );
    }
    
    public static function model($className=__CLASS__) {
        return parent::model($className);
    } 
}
