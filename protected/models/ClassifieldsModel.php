<?php

class ClassifieldsModel extends CActiveRecord
{
    
    public function tableName() {
        return 'classifields';
    }
    
    public function rules() {
        
        return array(
            
        );
    }
    
    public static function model($className=__CLASS__) {
        return parent::model($className);
    }
    
}
