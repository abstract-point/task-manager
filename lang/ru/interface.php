<?php

return [
    'task_statuses' => [
        'index' => [
            'title' => 'Статусы',
            'table' => [
                'id' => 'ID',
                'name' => 'Имя',
                'actions' => 'Действия'
            ],
            'button' => 'Новый статус',
        ]
    ],
    'tasks' => [
        'index' => [
            'title' => 'Задачи',
            'table' => [
                'id' => 'ID',
                'status' => 'Статус',
                'name' => 'Имя',
                'author' => 'Автор',
                'performer' => 'Исполнитель',
                'created_at' => 'Дата создания',
                'actions' => 'Действия'
            ],
            'button' => 'Новая задача',
        ],
        'create' => [
            'title' => 'Создать задачу',
            'button' => 'Создать',
        ],
        'edit' => [
            'title' => 'Изменение задачи',
            'button' => 'Обновить',
        ],
        'form' => [
            'name' => 'Имя',
            'description' => 'Описание',
            'status' => 'Статус',
            'performer' => 'Исполнитель',
            'labels' => 'Метки',
        ],
        'show' => [
            'title' => 'Просмотр задачи',
            'name' => 'Имя',
            'description' => 'Описание',
            'status' => 'Статус',
            'labels' => 'Метки',
        ],
    ]
];
