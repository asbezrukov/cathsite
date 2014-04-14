<?php

class CrudAction extends CAction
{
    /**
     *
     *  Метод создает и возвращает экземпляр класса модели, если введен $id записи то возвращается модель с этой записью.
     *
     *  Входные параметры:
     *      $mid - название модели (без окончания Model) для которой нужно создать экзэмп. класса;
     *      $id - идентификтор записи по которому нужно получить ее после создания экземп. класса (по ум. null).
     *
     **/
    protected function loadModel($mid, $id = null)
    {
        //К названию модели дописываем Model и первый символ ставим в верхний регистр.
        $className = $this->modelClassFormatter($mid);
        //Создаем класс модели.
        $object = new $className();
        if (!isset($object))
            throw new CHttpException(404,'Класс "'.$className.'" не найден');

        //Если указан id получаем по нему строку модели.
        if (isset($id) && !empty($id)) {
            return $this->getModel($object, $id);
        }

        return $object;
    }

    protected function getModel($object, $id)
    {
        //Получаем модель.
        $model = $object::model();
        if ($model===null)
            throw new CHttpException(404,'Модель "'/*.$className*/.'" не найдена');

        $model = $model->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'Запрошенная запись модели "'/*.$className*/.'" с "id='.$id.'" не найдена');

        return $model;
    }

    protected function modelClassFormatter($mid)
    {
        if (empty($mid))
            throw new CHttpException(404,'Не введен идентификатор модели.');
        return ucfirst($mid)."Model";
    }
}
?>