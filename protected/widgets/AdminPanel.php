<?php

class AdminPanel extends CWidget
{
    private $sections = array();

    public function init()
    {
        $this->sections = array(
            array(
                'name' => 'Страницы',
                'url' => '/admin/pages',
                'operation' => 'contentManager',
                'active' => false
            ),
            array(
                'name' => 'Новости',
                'url' => '/admin/news',
                'operation' => 'newsManager',
                'active' => false
            ),
            array(
                'name' => 'События',
                'url' => '/admin/events',
                'operation' => 'eventManager',
                'active' => false
            ),
            array(
                'name' => 'Сотрудники',
                'url' => '/admin/staff',
                'operation' => 'staffManager',
                'active' => false
            ),
            array(
                'name' => 'Объявления',
                'url' => '/admin/classifieds',
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

        if (count($arResult) > 0) {
            $this->render('adminPanelForm', array('arResult'=>$arResult));
        }
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
