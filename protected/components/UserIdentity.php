<?php

class UserIdentity extends CUserIdentity {

    protected $_id;

    public function authenticate() {

        $user = UsersModel::model()->find('LOWER(user_login)=?', array(strtolower($this->username)));

        if(($user===null) || (md5($this->password)!==$user->password)) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else {
            $this->_id = $user->idUsers;
            $this->username = $user->username;
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId(){
        return $this->_id;
    }
}