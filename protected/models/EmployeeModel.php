<?php

class EmployeeModel extends CActiveRecord
{
	public $tempData = array();
	public $image;
	
	public function getEmployees($limit=null, $random=false)
	{
		$criteria=new CDbCriteria;
		$criteria->select='id, surname, name, patronymic, photo, rank, degree, position, consult_time';
		if($random)
		{
			$criteria->condition='photo is not null';
			$criteria->order='rand()';
		}
		else
		{
			$criteria->order='surname ASC';
		}
		if(isset($limit))
		{
			$criteria->limit=$limit;		
		}
		return $this->findAll($criteria);
	}

    public function tableName() {
        return 'Employee';
    }



    public function rules() {
        
        return array(

			array('photo', 'file', 'types'=>'jpg, gif, png'),
        );
    }   
	
public function beforeSave()
    {
        $this->setAttributes($this->tempData, false);

        $path = Yii::getPathOfAlias('application.upload.events');
        $pathBigImg = Yii::getPathOfAlias('application.upload.events.300x');
        $pathSmallImg  = Yii::getPathOfAlias('application.upload.events.65x65');
        $pathNormalImg = Yii::getPathOfAlias('application.upload.events.170');

        if (!file_exists($path)) {
            mkdir($path);
            chmod($path, 0777);
        }

        if (!file_exists($pathBigImg)) {
            mkdir($pathBigImg);
            chmod($pathBigImg, 0777);
        }

        if (!file_exists($pathSmallImg)) {
            mkdir($pathSmallImg);
            chmod($pathSmallImg, 0777);
        }

        if (!file_exists($pathNormalImg)) {
            mkdir($pathNormalImg);
            chmod($pathNormalImg, 0777);
        }

        if (isset($this->image)) {
            $this->image->saveAs($pathBigImg.'/'.$this->image->name);

            $fileImage = new CFileImage();
            $fileImage->load($pathBigImg.'/'.$this->image->name);

            $fileImage->resizeToWidth(300);
            $fileImage->save($pathBigImg.'/'.$this->image->name);

            $fileImage->resize(65,65);
            $fileImage->save($pathSmallImg.'/'.$this->image->name);

            $fileImage->resize(170);
            $fileImage->save($pathNormalImg.'/'.$this->image->name);

            $this->news_pictures = $this->image->name;
        }

        if ($this->validate()) {
            return true;
        } else {
            return false;
        }
    }


	public function imageFieldName() {
        return 'photo';
    }

    public function getImageUrl($place = "detail") {
        if (empty($this->url_pictures))
            return false;
			
		switch ($place) {
            case "detail":
                $url = "/protected/upload/staff/300x";
                break;
            case "main": {
                $url = "/protected/upload/staff/65x65";
                break;
			}
            case "list": {
                $url = "/protected/upload/staff/170";
                break;
            }
        }

        return Yii::app()->baseUrl.$url.'/'.$this->url_pictures;
        //return Yii::app()->baseUrl."/protected/upload/".$this->url_pictures;
    }

    public function afterSave() {
        unset($this->tempData);
    }

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }
	
	public function attributeLabels()
	{
	return array(
	'surname' => 'Фамилия',
	'name' => 'Имя',
	'patronymic' => 'Отчество',
	'photo' => 'Фото',
	'prof_interest' => 'Профессиональные интересы',
	'projects' => 'Исследовательские проекты',
	'languages' => 'Знание иностранных языков',
	'begin_date' => 'Начало работы на кафедре',
	'phone' => 'Телефон',
	'degree' => 'Звание',
	'lecturer' => 'Преподователь?',
	'position' => 'Должность',
	'training' => 'Повышение квалификации',
	'consult_time' => 'Время консультаций',
	'rank' => 'Образование, ученые степени'
	);
	}

}