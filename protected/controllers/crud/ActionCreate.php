<?php
/**
 *
 *  Действие создает запись в модели
 *
 *  Входные параметры:
 *      $mid - название модели
 *
 *  Пример вызова: ?r=<controllerid>/create&mid=users
 *
 **/
class ActionCreate extends CrudAction
{
    public function run($mid) {
        //Первый символ поднимаем в верхний регистр, т.к. название всех моделей начинается с большой буквы, для массива $_POST это имеет значения, в остальных случаях нет.
        $postMid = $this->modelClassFormatter($mid);
        //Создаем модель
        $model=$this->loadModel($mid);
        //Если данные отправлены, то записываем их и сохраняем в базе, иначе открываем форму создания записи.
        if(isset($_POST[$postMid]))
        {
            $data = $_POST[$postMid];

            $model->tempData = $data;
            //Метод save автоматически вызывает метод beforeSave модели, в котором записываются данные из переменной '$model->tempData' в модель, проходят валидацию и сохраняются.
            //Метод beforeSave у каждой модели свой.
            if (isset($model->image))
                $model->image = CUploadedFile::getInstance($model, $model->imageFieldName());

            if($model->save())
                $this->controller->redirect(array($this->controller->listAction));
        }

        $this->controller->render('crud/_form',array(
            'model'=>$model,
        ));
    }
}
