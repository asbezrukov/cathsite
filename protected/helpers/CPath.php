<?php

class CPath {

    public static function getRelativePath($absPath) {
        $webRoot = Yii::getPathOfAlias('webroot');
        return str_replace($webRoot,'', $absPath);
    }
}