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
            if($model->save())
                $this->redirect(array('view', 'mid'=>$mid, 'id'=>$id));
        }

        $this->render($mid.'/update',array(
        'model'=>$model,
        ));
    }
}
?>