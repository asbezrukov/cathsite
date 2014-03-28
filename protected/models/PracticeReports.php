<?php

class PracticeReportsModel extends CActiveRecord
{
    //«десь хран€тьс€ данные полученные из массива $_POST в контрллере
    public $tempData = array();

    public function tableName() {
        return 'practicereports';
    }
    
    public function rules() {
        
        return array(

        );
    }

    /**
     *  ћетод выполн€етс€ после вызова метода модели save(),
     *  ¬ нем будут записыватьс€ данные из переменной tempData в модель, и проверка на валидность.
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
