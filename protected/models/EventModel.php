<?php

class EventModel extends CActiveRecord
{
    //Здесь храняться данные полученные из массива $_POST в контрллере
    public $tempData = array();

    public function tableName() {
        return 'Event';
    }
    
    public function rules() {
        
        return array(

        );
    }

    /**
     *  Метод выполняется после вызова метода модели save(),
     *  В нем будут записываться данные из переменной tempData в модель, и проверка на валидность.
     */
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
