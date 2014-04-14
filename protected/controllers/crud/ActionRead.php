<?php

/**
 *
 *  Действие выводит запись модели по ее id.
 *
 *  Входные параметры:
 *      $mid - название модели для которой нужно получить запись
 *      $id - идентификатор записи
 *
 *  Пример вызова: ?r=<controllerid>/read&mid=news&id=8
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
