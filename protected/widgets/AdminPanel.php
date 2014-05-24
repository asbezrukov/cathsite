<?php

class AdminPanel extends CWidget
{
    private $sections = array();

    public function init()
    {
        $this->sections = array(
            array(
                'name' => 'Страницы',
                'url' => '',
                'operation' => 'contentManager'
            ),
            array(
                'name' => 'Новости',
                'url' => '',
                'operation' => 'newsManager'
            ),
            array(
                'name' => 'События',
                'url' => '',
                'operation' => 'eventManager'
            ),
            array(
                'name' => 'Сотрудники',
                'url' => '',
                'operation' => 'staffManager'
            ),
            array(
                'name' => 'Объявления',
                'url' => '',
                'operation' => 'notesManager'
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
                $arResult[] = $item;
            }
        }

        $this->render('adminPanelForm', array('arResult'=>$arResult));
    }
}
