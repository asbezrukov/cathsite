<?php

/**
 *
 *  Действие выводит запись модели по ее id.
 *
 *  Входные параметры:
 *      $mid - название модели (без окончания Model) для которой нужно получить запись
 *      $id - идентификатор записи
 *
 *  Пример вызова: ?r=<controllerid>/view&mid=news&id=8
 *      crud/view  - контроллер/действие
 *      mid=news  - таблица
 *      id=8  - 8 запись в таблице news
 *
 **/
class ActionRead extends CrudAction
{
    public function run($mid, $id)
    {
        $model = $this->loadModel($mid, $id);

        $arResult['data'] = $model;

        $this->controller->render('detail', array(
            'arResult'=>$arResult,
        ));
    }
}
?>