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

        $pathBigImg = Yii::getPathOfAlias('application.upload.news.400x');
        $pathNormalImg = Yii::getPathOfAlias('application.upload.news.360x220');
        $pathSmallImg  = Yii::getPathOfAlias('application.upload.news.65x65');

        if (isset($this->image)) {
            // Ключ: размер картинки,
            // Значение: папка для сохранения.
            $params = array(
                "400x"   =>$pathBigImg,
                "360x220"=>$pathNormalImg,
                "65x65"  =>$pathSmallImg
            );

            $uploadManager = new UploadManager($this->image, $params);
            $uploadManager->saveAll();

            $this->news_pictures = $this->image->name;
        }

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
                $url = "/protected/upload/news/400x";
                break;
            case "main": {
                $url = "/protected/upload/news/65x65";
                break;
            }
            case "list": {
                $url = "/protected/upload/news/360x220";
                break;
            }
        }

        return Yii::app()->baseUrl.$url.'/'.$this->news_pictures;
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