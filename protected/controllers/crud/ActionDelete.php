<?php

/**
 *
 *  Действие удаляет запись в модели
 *
 *  Входные параметры:
 *      $mid - название модели
 *      $id - идентификатор записи
 *
 *  Пример вызова: ?r=<conrollerid>/delete&mid=news&id=155
 *
 **/
class ActionDelete extends CrudAction
{
    public function run($mid, $id)
    {
        //Находим нужную запись модели и удаляем.
        $this->loadModel($mid, $id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->controller->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array($this->controller->listAction));
    }
}
