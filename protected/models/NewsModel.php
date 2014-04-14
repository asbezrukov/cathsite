<?php

class NewsModel extends CActiveRecord
{
    public $tempData = array();
	public $image;

	public function recently($limit=null)
	{
		$criteria = new CDbCriteria;
		$criteria->select = 'id_news, header, date_publication, preview, text_description';
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
			//array('image', 'file', 'types'=>'jpg, gif, png'),
        );
    }

    public function beforeSave()
    {
        $this->setAttributes($this->tempData, false);

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
    
}
