<?php

class NewsModel extends CActiveRecord
{
    public $tempData = array();
    public $image;

    public function recently($limit=null)
    {
        $criteria = new CDbCriteria;
        $criteria->select = 'id_news, header, date_publication, preview, text_description, news_pictures';
        $criteria->order = 'date_publication DESC';
        if(isset($limit))
        {
            $criteria->limit = $limit;
        }
        return $this->findAll($criteria);
    }

    public function relations()
    {
        return array(
            'news_category' =>array(self::BELONGS_TO, 'NewsCategoryModel', 'category')
        );
    }

    public function getKeyValueCategories() {
        $data = $this->getAllCategories();
        $result = array();

        foreach($data as $item) {
            $result[$item->id_newsCategory] = $item->nc_name;
        }
        return $result;
    }

    public function getAllCategories() {
        return NewsCategoryModel::model()->findAll();
    }

    public function tableName() {
        return 'News';
    }

    public function rules() {

        return array(
            array('news_pictures', 'file', 'types'=>'jpg, gif, png'),
        );
    }

    public function beforeSave()
    {
        $this->setAttributes($this->tempData, false);

        $path = Yii::getPathOfAlias('application.upload.news.400x');
        $pathSmallImg  = Yii::getPathOfAlias('application.upload.news.65x65');
        $pathNormalImg = Yii::getPathOfAlias('application.upload.news.360x220');

        if (!file_exists($path))
            mkdir($path, 0777, true);

        if (!file_exists($pathSmallImg))
            mkdir($pathSmallImg, 0777, true);

        if (!file_exists($pathNormalImg))
            mkdir($pathNormalImg, 0777, true);

        if (isset($this->image)) {
            $this->image->saveAs($path.'/'.$this->image->name);
            $this->news_pictures = $this->image->name;
        }

        print_r($path.'/'.$this->image->name);
        die;

        if ($this->validate()) {
            return true;
        } else {
            return false;
        }
    }

    public function imageFieldName()
    {
        return 'news_pictures';
    }
    public function afterSave() {
        unset($this->tempData);
    }

    public function getImageUrl($place = "detail") {
        if (empty($this->news_pictures))
            return false;

        switch ($place) {
            case "detail":
                $path = Yii::getPathOfAlias('application.upload.news.400x');
                break;
            case "main": {
                $path = Yii::getPathOfAlias('application.upload.news.65x65');
                break;
            }
            case "list": {
                $path = Yii::getPathOfAlias('application.upload.news.360x220');
                break;
            }
        }

        return $path.'/'.$this->news_pictures;
    }

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }
	
	public function attributeLabels(){
		return array(
			'category' => 'Категория',
			'date_publication' => 'Дата публикации',
			'news_pictures' => 'Изображение',
			'publication_main' => 'Публиковать на главной',
			'header' => 'Заголовок',
			'preview' => 'Анонс',
			'text_description' => 'Текст-описание'
		);
	}

}