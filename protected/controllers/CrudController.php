<?php

/**
 * Class CrudController
 *
 * В классе CrudController реализованы CRUD(Create, Read, Update, Delete) действия.
 * Обязательное условие для вызова каждого действия это передать название модели для которой будет выполнена CRUD-операция.
 * Название модели должно храниться в переменной $mid - "ModelId".
 *
 * Список действия:
 *      view   - выводит одну строку модели
 *      update - изменяет одно строку модели
 *      index  - выводит список записей модели
 *      admin  - выводит список записей модели в виде таблице с кнопками просмотра, обновления, удаления записи + форма поиска
 *      delete - удаляет одну запись модели
 *
 * Пример ссылки: ?r=crud/update&mid=event&id=5
 *
 */
class CrudController extends Controller
{
    public function filters()
    {
        return array(
            //'accessControl', // perform access control for CRUD operations
            //'postOnly + delete', // we only allow deletion via POST request
        );
    }

    public function accessRules()
    {
        return array(/*
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),*/
        );
    }

    /**
     *  Метод создает и возвращает экземпляр класса модели
     *
     *  Входные параметры:
     *      $mid (ModelId) - название модели для которой нужно создать экзэмп. класса
     *      $id - идентификтор записи по которому нужно получить ее после создания экземп. класса (по ум. null)
     *
     **/
    private function loadModel($mid, $id = null)
    {
        //К названию модели дописываем Model и первый символ ставим в верхний регистр.
        $className = ucfirst($mid)."Model";
        //Создаем класс модели.
        $object = new $className();

        if ($object===null)
            throw new CHttpException(404,'Класс "'.$className.'" не найден');
        //Получаем модель.
        $model = $object::model();
        if ($model===null)
            throw new CHttpException(404,'Модель "'.$className.'" не найдена');
        //Если указан id получаем по нему строку модели.
        if (!empty($id) || $id !== null) {
            $model = $model->findByPk($id);
            if($model===null)
                throw new CHttpException(404,'Запрошенная запись модели "'.$className.'" с "id='.$id.'" не найдена');
        }

        return $model;
    }

    /**
     *
     *  Действие выводит запись модели по ее id.
     *
     *  Входные параметры:
     *      $mid - название модели для которой нужно получить запись
     *      $id - идентификатор записи
     *
     *  Пример вызова: ?r=crud/view&mid=news&id=8
     *      crud/view  - контроллер/действие
     *      mid=news  - таблица
     *      id=8  - 8 запись в таблице news
     **/
    public function actionView($mid, $id)
    {
        if (empty($mid))
            throw new CHttpException(404,'Не введен идентификатор модели.');
        if (empty($id))
            throw new CHttpException(404,'Не введен идентификатор строки для таблицы: '.$mid);
        $this->render($mid.'/view',array(
            'model'=>$this->loadModel($mid, $id),
        ));
    }

    /**
     *
     *  Действие создает запись в модели
     *
     *  Входные параметры:
     *      $mid - название модели
     *
     *  Пример вызова: ?r=crud/create&mid=users
     *
     **/
    public function actionCreate($mid)
    {
        //Первый символ поднимаем в верхний регистр, т.к. название всех моделей начинается с большой буквы, для массива $_POST это имеет значения, в остальных случаях нет.
        $postMid = ucfirst($mid)."Model";
        //Создаем модель
        $model=$this->loadModel($mid);
        //Если данные отправлены, то записываем их и сохраняем в базе, иначе открываем форму создания записи.
        if(isset($_POST[$postMid]))
        {
            $data = $_POST[$postMid];

            $model->tempData = $data;
            //Метод save автоматически вызывает метод beforeSave модели, в котором записываются данные из переменной '$model->tempData' в модель, проходят валидацию и сохраняются.
            //Метод beforeSave у каждой модели свой.
            if($model->save())
                $this->redirect(array('admin', 'mid'=>$mid));
        }

        $this->render($mid.'/create',array(
            'model'=>$model,
        ));
    }

    /**
     *
     *  Действие обновляет запись в модели
     *
     *  Входные параметры:
     *      $mid - название модели
     *      $id - идентификатор записи
     *
     *  Пример вызова: ?r=crud/update&mid=news&id=102
     *
     **/
    public function actionUpdate($mid, $id)
    {
        //Действие работает аналогично действию 'actionCreate'
        $postMid = ucfirst($mid)."Model";
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

    /**
     *
     *  Действие удаляет запись в модели
     *
     *  Входные параметры:
     *      $mid - название модели
     *      $id - идентификатор записи
     *
     **/
    public function actionDelete($mid, $id)
    {
        //Находим нужную запись модели и удаляем.
        $this->loadModel($mid, $id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin','mid'=>$mid));
    }

    /**
     *
     *  Действие возвращет список записей модели
     *
     *  Входные параметры:
     *      $mid - название модели
     *
     **/
    public function actionIndex($mid)
    {
        $dataProvider=new CActiveDataProvider($mid);

        $this->render('index',array(
            'dataProvider'=>$dataProvider
        ));
    }

    /**
     *
     *  Действие возвращет список записей модели
     *
     *  Входные параметры:
     *      $mid - название модели
     *
     **/
    public function actionAdmin($mid)
    {
        $model = $this->loadModel($mid, null);

        $model->unsetAttributes();  // clear any default values
        if(isset($_GET[$mid]))
            $model->attributes=$_GET[$mid];

        $this->render($mid.'/admin',array(
            'model'=>$model,
        ));
    }

    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
} 