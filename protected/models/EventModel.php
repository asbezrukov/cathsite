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

    public function imageFieldName() {
        return 'url_pictures';
    }

    public function getImageUrl() {
        if (empty($this->url_pictures))
            return false;
        return Yii::app()->baseUrl."/protected/upload/".$this->url_pictures;
    }

    public function rules() {
        
        return array(
			array('url_pictures', 'file', 'types'=>'jpg, gif, png'),
        );
    }

    public function beforeSave()
    {
        $this->setAttributes($this->tempData, false);

        if (isset($this->image)) {
            $this->image->saveAs(Yii::app()->basePath.'/upload/'.$this->image->name);
            $this->url_pictures = $this->image->name;
        }

        if ($this->validate()) {
            return true;
        } else {
            return false;
        }
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
