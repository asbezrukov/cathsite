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
	'SubjectAuthor' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'NotesAuthor' => array(
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
	
	'chiefStudent' => array(
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
            'studentUnPersReader',
			'GroupPersAuthor',
			'GroupPasswordChanger',
        ),
        'data' => null
    ),

	'NewsManager' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'EventManager' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'StaffManager' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'ContentManager' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'LabsManager' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'SubjectManager' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'NotesManager' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'SubscribeManager' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'StudentManager' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'StaffPasswordChanger' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'StudentPasswordChanger' => array(
        'type' => CAuthItem::TYPE_OPERATION,
        'description' => '...',
        'bizRule' => null,
        'data' => null
    ),
	'StudentPersAuthor' => array(
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
			'LabsReader',
            'staffReader',
			'LabsAuthor',
			'SubjectAuthor',
			'NotesAuthor',
			'StudentPersReader',
			'SubscribeJoiner',
        ),
        'bizRule' => null,
        'data' => null
    ),



    'chiefStaff' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Заведующий кафедры',
        'children' => array(
            'staff',
			'NewsManager',
			'EventManager',
			'StaffManager',
			'ContentManager',
			'LabsManager',
			'SubjectManager',
			'NotesManager',
			'SubscribeManager',
			'StudentManager',
			'StaffPasswordChanger',
			'StudentPasswordChanger',
			'StudentPersAuthor',	

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