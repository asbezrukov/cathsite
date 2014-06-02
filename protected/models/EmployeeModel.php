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



    public function rules()
    {
        return array(
			array('photo', 'file', 'allowEmpty'=>true, 'types'=>'jpg, gif, png'),
        );
    }

    const PathAliasToBigImg = 'application.upload.staff.300x';
    const PathAliasToNormalImg = 'application.upload.staff.170x150';
    const PathAliasToSmallImg = 'application.upload.staff.65x65';
    public function beforeSave()
    {
        $pathBigImg = Yii::getPathOfAlias(self::PathAliasToBigImg);
        $pathNormalImg = Yii::getPathOfAlias(self::PathAliasToNormalImg);
        $pathSmallImg  = Yii::getPathOfAlias(self::PathAliasToSmallImg);

        if (!empty($this[$this->imageFieldName()])) {
            // Если картинка загружена и загружается новая картинка, то старая удаляется со всеми копиями.
            if (!empty($this->image)) {
                @unlink($pathBigImg . '/' . $this[$this->imageFieldName()]);
                @unlink($pathNormalImg . '/' . $this[$this->imageFieldName()]);
                @unlink($pathSmallImg . '/' . $this[$this->imageFieldName()]);
            }

            $this->tempData[$this->imageFieldName()] = $this[$this->imageFieldName()];
        }

        $this->setAttributes($this->tempData, false);

        if (isset($this->image)) {
            // Ключ: размер картинки,
            // Значение: папка для сохранения.
            $params = array(
                "300x"   =>$pathBigImg,
                "170x150"=>$pathNormalImg,
                "65x65"  =>$pathSmallImg
            );

            $uploadManager = new UploadManager($this->image, $params);
            $uploadManager->appendHashToFilename();
            $uploadManager->saveAll();

            $this->photo = $uploadManager->getFilename();
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
        if (empty($this->photo))
            return false;

        switch ($place) {
            case "detail":
                $absPath = Yii::getPathOfAlias(self::PathAliasToBigImg);
                break;
            case "main": {
                $absPath = Yii::getPathOfAlias(self::PathAliasToSmallImg);
                break;
            }
            case "list": {
                $absPath = Yii::getPathOfAlias(self::PathAliasToNormalImg);
                break;
            }
        }
        $url = CPath::getRelativePath($absPath);

        return Yii::app()->baseUrl . $url.'/'.$this->photo;
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