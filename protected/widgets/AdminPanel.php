<?php

class AdminPanel extends CWidget
{
    private $sections = array();

    public function init()
    {
        $this->sections = array(
            array(
                'name' => 'Страницы',
                'url' => '/cms/pages',
                'operation' => 'contentManager',
                'active' => false
            ),
            array(
                'name' => 'Новости',
                'url' => '/news/list',
                'operation' => 'newsManager',
                'active' => false
            ),
            array(
                'name' => 'События',
                'url' => '/event/list',
                'operation' => 'eventManager',
                'active' => false
            ),
            array(
                'name' => 'Сотрудники',
                'url' => '/cms/staff',
                'operation' => 'staffManager',
                'active' => false
            ),
            array(
                'name' => 'Объявления',
                'url' => '/cms/classifieds',
                'operation' => 'notesManager',
                'active' => false
            )
        );
    }

    public function run()
    {
        if (Yii::app()->user->isGuest)
            return;

        $arResult = array();
        foreach ($this->sections as $item) {
            if (Yii::app()->user->checkAccess($item['operation'])) {
                unset($item['operation']);
                $item['active'] = $this->isActive($item['url']);
                $arResult[] = $item;
            }
        }
        $this->render('adminPanelForm', array('arResult'=>$arResult));
    }

    private function isActive($url)
    {
        if (Yii::app()->request->requestUri == $url) {
            return true;
        } else {
            return false;
        }
    }
}
