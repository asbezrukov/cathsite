<?php

class WebUser extends CWebUser {
    private $_model = null;

    function getRole() {
        if($user = $this->getModel()){
            return $user->role;
        }
    }

    private function getModel(){
        if (!$this->isGuest && $this->_model === null){
            $this->_model = UsersModel::model()->findByPk($this->idUsers, array('select'=>'role'));
        }
        return $this->_model;
    }
}