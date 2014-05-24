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
	
	'labsAuthor' => array(
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
	'groupPersAuthor' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'groupPasswordChanger' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'subjectAuthor' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'notesAuthor' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),

	
	'student' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Guest',
        'bizRule' => null,
        'children' => array(
            'guest',
        ),
        'data' => null
    ),
	
	'chiefstudent' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Guest',
        'bizRule' => null,
        'children' => array(
            'student',
			'groupPersAuthor',
            'newsManager',
			'groupPasswordChanger'
        ),
        'data' => null
    ),

	'newsManager' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'eventManager' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'staffManager' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'contentManager' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'labsManager' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'subjectManager' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'notesManager' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'subscribeManager' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'studentManager' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'staffPasswordChanger' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'studentPasswordChanger' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'studentPersAuthor' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	
    'staff' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Преподаватель',
        'children' => array(
            'guest',
			'labsReader',
            'staffReader',
			'labsAuthor',
			'subjectAuthor',
			'notesAuthor',
			'studentPersReader',
			'subscribeJoiner',
        ),
        'bizRule' => null,
        'data' => null
    ),

    'chiefstaff' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Заведующий кафедры',
        'children' => array(
            'staff',
			'newsManager',
			'eventManager',
			'staffManager',
			'contentManager',
			'labsManager',
			'subjectManager',
			'notesManager',
			'subscribeManager',
			'studentManager',
			'staffPasswordChanger',
			'studentPasswordChanger',
			'studentPersAuthor',

        ),
        'bizRule' => null,
        'data' => null
    ),

    'admin' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Администратор',
        'children' => array(
            'chiefstudent',
            'chiefstaff'
        ),
        'bizRule' => null,
        'data' => null
    ),
);