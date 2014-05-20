<?php

class EventModel extends CActiveRecord
{
    public $tempData = array();
	public $image;

	public function recently($limit=null, $past=null)
	{
		$criteria=new CDbCriteria;
		$criteria->select='id_event, name_event, hold_date, text_description, url_pictures';
		$criteria->order='hold_date DESC';
		if(isset($limit))
		{
			$criteria->limit=$limit;
		}
		if(isset($past))
		{
			$criteria->condition=$past?'hold_date < NOW()':'hold_date > NOW()'; 
		}
		return $this->findAll($criteria);
	}

	public function relations()
	{
		return array(
			'category'=>array(
				self::BELONGS_TO, 'EventCategoryModel', 'id_category')
        );
	}

    public function getKeyValueCategories() {
        $data = $this->getAllCategories();
        $result = array();

        foreach($data as $item) {
            $result[$item->id] = $item->ec_name;
        }
        return $result;
    }

    public function getAllCategories() {
        return EventCategoryModel::model()->findAll();
    }

    public function tableName() {
        return 'Event';
    }

    public function rules() {
        
        return array(
			array('url_pictures', 'file', 'types'=>'jpg, gif, png'),
        );
    }

    public function beforeSave()
    {
        $this->setAttributes($this->tempData, false);

        $pathBigImg = Yii::getPathOfAlias('application.upload.events.225x');
        $pathNormalImg = Yii::getPathOfAlias('application.upload.events.170x150');
        $pathSmallImg  = Yii::getPathOfAlias('application.upload.events.65x65');

        if (isset($this->image)) {
            // Ключ: размер картинки,
            // Значение: папка для сохранения.
            $params = array(
                "225x"   =>$pathBigImg,
                "170x150"=>$pathNormalImg,
                "65x65"  =>$pathSmallImg
            );

            $uploadManager = new UploadManager($this->image, $params);
            $uploadManager->saveAll();

            $this->url_pictures = $this->image->name;
        }

        if ($this->validate()) {
            return true;
        } else {
            return false;
        }
    }


	public function imageFieldName() {
        return 'url_pictures';
    }

    public function getImageUrl($place = "detail") {
        if (empty($this->url_pictures))
            return false;
			
		switch ($place) {
            case "detail":
                $url = "/protected/upload/events/225x";
                break;
            case "main": {
                $url = "/protected/upload/events/65x65";
                break;
			}
            case "list": {
                $url = "/protected/upload/events/170x150";
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
            'name_event' => 'Название события',
            'id_category' => 'Категория',
            'date_publication' => 'Дата публикации',
            'hold_date' => 'Дата проведения',
            'text_description' => 'Текст-описание',
            'url_pictures' => 'Изображение'
        );
	}
    
}
