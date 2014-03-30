<?php
class SubscribersModel extends CActiveRecord
{
    public function tableName() {
        return 'Subscribers';
    }
    
    public function rules() {
        
        return array(
            
        );
    }
    
    public static function model($className=__CLASS__) {
        return parent::model($className);
    } 
}
