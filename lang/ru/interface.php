<?php

return [
    'title' => 'Todos',
    'welcome' => 'Добро пожаловать в Todos!',
    'navigation' => [
        'statuses' => 'Статусы',
        'tasks' => 'Задачи',
        'labels' => 'Метки',
        'login' => 'Войти',
        'register' => 'Регистрация',
        'profile' => 'Профиль',
        'logout' => 'Выйти',
    ],
    'login' => [
        'title' => 'Вход в Todos',
        'email' => 'Email',
        'password' => 'Пароль',
        'remember_me' => 'Запомнить меня',
        'forgot_password' => 'Забыли пароль?',
        'button' => 'Войти',
    ],
    'register' => [
        'title' => 'Регистрация в Todos',
        'name' => 'Имя',
        'email' => 'Email',
        'password' => 'Пароль',
        'confirm_password' => 'Подтверждение',
        'already_registered' => 'Уже зарегистрированы?',
        'button' => 'Зарегистрировать',
    ],
    'profile' => [
        'title' => 'Профиль',
        'info' => 'Информация о профиле',
        'info_update' => 'Обновите ваше Имя или email',
        'name' => 'Имя',
        'email' => 'Email',
        'email_unverified' => 'Ваш email не подтвержден.',
        'email_resend' => 'Нажмите здесь, чтобы отправить еще письмо с подтверждением.',
        'email_resented' => 'Письмо с подтверждением отправлено на ваш email.',
        'password' => 'Пароль',
        'password_info' => 'Чтобы обеспечить безопасность, в вашей учетной записи используйте длинный случайный пароль.',
        'password_update' => 'Обновить пароль',
        'password_current' => 'Текущий пароль',
        'password_new' => 'Новый пароль',
        'password_confirm' => 'Подтверждение пароля',
        'button_save' => 'Сохранить',
        'saved' => 'Сохранено',
        'delete' => 'Удалить аккаунт',
        'delete_info' => 'После удаления вашей учетной записи все ее ресурсы и данные будут удалены безвозвратно. Перед удалением учетной записи загрузите все данные и информацию, которые вы хотите сохранить.',
        'button_delete' => 'Удалить аккаунт',

    ],
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
    ],
    'labels' => [
        'index' => [
            'title' => 'Метки',
            'table' => [
                'id' => 'ID',
                'name' => 'Имя',
                'description' => 'Описание',
                'created_at' => 'Дата создания',
                'actions' => 'Действия'
            ],
            'button' => 'Создать метку',
        ],
        'create' => [
            'title' => 'Создать метку',
            'button' => 'Создать',
        ],
        'edit' => [
            'title' => 'Изменение метки',
            'button' => 'Обновить',
        ],
        'form' => [
            'name' => 'Имя',
            'description' => 'Описание',
        ],
    ]
];
