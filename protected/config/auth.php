<?php

return array(
    /// Операции
    'newsReader' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => 'Чтение новости',
        'bizRule' => null,
        'data' => null
    ),
    'eventReader' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => 'Чтение событий',
        'bizRule' => null,
        'data' => null
    ),
    'staffReader' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => 'Просмотр сотрудников',
        'bizRule' => null,
        'data' => null
    ),
    'contentReader' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => 'Просмотр страниц с контеном',
        'bizRule' => null,
        'data' => null
    ),
    'labsReader' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => 'Просмотр лабораторных',
        'bizRule' => null,
        'data' => null
    ),
    'subjectRestReader' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => 'Просмотр ...',
        'bizRule' => null,
        'data' => null
    ),
    'notesReader' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => 'Просмотр ...',
        'bizRule' => null,
        'data' => null
    ),
    'subscribeJoiner' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => 'Подписка',
        'bizRule' => null,
        'data' => null
    ),
    'studentUnPersReader' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => 'Просмотр данных о специальностях, группах, студентах не являющиеся ПДн',
        'bizRule' => null,
        'data' => null
    ),

    'guest' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Guest',
        'bizRule' => null,
        'children' => array(
            'newsReader',
            'eventReader',
            'staffReader',
            'contentReader',
            'labsReader',
            'subjectRestReader',
            'notesReader',
            'subscribeJoiner',
            'studentUnPersReader'
        ),
        'data' => null
    ),
	
	'LabsAuthor' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'subjectFullReader' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'GroupPersAuthor' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'GroupPasswordChanger' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	
	'Student' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Guest',
        'bizRule' => null,
        'children' => array(
            'newsReader',
            'eventReader',
            'staffReader',
            'contentReader',
            'LabsAuthor',
            'subjectFullReader',
            'notesReader',
            'subscribeJoiner',
            'studentUnPersReader'
        ),
        'data' => null
    ),
	
	'ChiefStudent' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Guest',
        'bizRule' => null,
        'children' => array(
            'newsReader',
            'eventReader',
            'staffReader',
            'contentReader',
            'LabsAuthor',
            'subjectFullReader',
            'notesReader',
            'subscribeJoiner',
            'studentUnPersReader'
			'GroupPersAuthor'
			'GroupPasswordChanger'
        ),
        'data' => null
    ),


    'staff' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Преподаватель',
        'children' => array(
            'guest',
        ),
        'bizRule' => null,
        'data' => null
    ),



    'chiefStaff' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Заведующий кафедры',
        'children' => array(
            'staff',
        ),
        'bizRule' => null,
        'data' => null
    ),



    'student' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Студент',
        'children' => array(
            'guest',
        ),
        'bizRule' => null,
        'data' => null
    ),



    'chiefStudent' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Староста',
        'children' => array(
            'student',
        ),
        'bizRule' => null,
        'data' => null
    ),



    'admin' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Администратор',
        'children' => array(
            'chiefStudent',
            'chiefStaff'
        ),
        'bizRule' => null,
        'data' => null
    ),
);