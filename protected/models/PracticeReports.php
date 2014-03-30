<?php

class PracticeReportsModel extends CActiveRecord
{
    //����� ��������� ������ ���������� �� ������� $_POST � ����������
    public $tempData = array();

    public function tableName() {
        return 'practicereports';
    }
    
    public function rules() {
        
        return array(

        );
    }

    /**
     *  ����� ����������� ����� ������ ������ ������ save(),
     *  � ��� ����� ������������ ������ �� ���������� tempData � ������, � �������� �� ����������.
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
