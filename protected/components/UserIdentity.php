<?php

class UserIdentity extends CUserIdentity {

    protected $_id;

    public function authenticate() {

        $user = UsersModel::model()->find('LOWER(username)=?', array(strtolower($this->username)));

        if(($user===null) || ($this->password!==$user->password)) {

            $this->errorCode = self::ERROR_USERNAME_INVALID;

        } else {

            $this->_id = $user->idUsers;
            $this->username = $user->username;
            $this->errorCode = self::ERROR_NONE;
            // Запоминаем роль пользователя в сессии
            $this->setState('role', $user->role);

        }
        return !$this->errorCode;
    }

    public function getId(){
        return $this->_id;
    }
}