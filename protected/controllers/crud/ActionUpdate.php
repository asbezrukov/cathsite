<?php
/**
 *
 *  Действие обновляет запись в модели
 *
 *  Входные параметры:
 *      $mid - название модели
 *      $id - идентификатор записи
 *
 *  Пример вызова: ?r=<controllerid>/update&mid=news&id=102
 *
 **/
class ActionUpdate extends CrudAction
{
    public function run($mid, $id)
    {
        //Действие работает аналогично действию 'actionCreate'
        $postMid = $this->modelClassFormatter($mid);

        $model=$this->loadModel($mid, $id);

        if(isset($_POST[$postMid]))
        {
            $data = $_POST[$postMid];
            //Метод save автоматически вызывает метод beforeSave модели, в котором записываются данные из переменной '$model->tempData' в модель, проходят валидацию и сохраняются.
            //Метод beforeSave у каждой модели свой.
            $model->tempData = $data;

<<<<<<< HEAD
=======
            $model->setAttributes($data, false);

>>>>>>> issue_employee
            $model->image = CUploadedFile::getInstance($model, $model->imageFieldName());

            if($model->save())
                $this->controller->redirect(array($this->controller->detailAction, 'id'=>$id));
        }

        $this->controller->render('crud/_form',array(
            'model'=>$model,
        ));
    }
}
