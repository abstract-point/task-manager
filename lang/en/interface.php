<?php

return [
    'title' => 'Todos',
    'welcome' => [
        'title' => 'Welcome!',
    'text' => <<<TEXT
                This is simple task manager by Laravel.
                Register to create new tasks, statuses and tags.
                TEXT
    ],
    'navigation' => [
        'statuses' => 'Statuses',
        'tasks' => 'Tasks',
        'labels' => 'Labels',
        'login' => 'Login',
        'register' => 'Register',
        'profile' => 'Profile',
        'logout' => 'Logout',
    ],
    'login' => [
        'title' => 'Login to Todos',
        'email' => 'Email',
        'password' => 'Password',
        'remember_me' => 'Remember me',
        'forgot_password' => 'Forgot password?',
        'button' => 'Login',
    ],
    'register' => [
        'title' => 'Register to Todos',
        'name' => 'Name',
        'email' => 'Email',
        'password' => 'Password',
        'confirm_password' => 'Confirm password',
        'already_registered' => 'Already registered?',
        'button' => 'Register',
    ],
    'profile' => [
        'title' => 'Profile',
        'info' => 'Profile Information',
        'info_update' => 'Update your Name or Email',
        'name' => 'Name',
        'email' => 'Email',
        'email_unverified' => 'Your email is not verified.',
        'email_resend' => 'Click here to resend confirmation email.',
        'email_resented' => 'Confirmation email resent to your email.',
        'password' => 'Password',
        'password_info' => 'For security, use a long random password in your account.',
        'password_update' => 'Update Password',
        'password_current' => 'Current password',
        'password_new' => 'New password',
        'password_confirm' => 'Confirm password',
        'button_save' => 'Save',
        'saved' => 'Saved',
        'delete' => 'Delete Account',
        'delete_info' => 'Once your account is deleted, all its resources and data will be permanently deleted. Before deleting, download any data and information you wish to keep.',
        'button_delete' => 'Delete Account',
    ],
    'task_statuses' => [
        'index' => [
            'title' => 'Statuses',
            'table' => [
                'id' => 'ID',
                'name' => 'Name',
                'created_at' => 'Created At',
                'actions' => [
                    'title' => 'Actions',
                    'edit' => 'Edit',
                    'delete' => 'Delete',
                    'alert' => 'Are you sure?',
                    'no_data' => 'No data'
                ]
            ],
            'button' => 'New Status',
        ]
    ],
    'tasks' => [
        'index' => [
            'title' => 'Tasks',
            'table' => [
                'id' => 'ID',
                'status' => 'Status',
                'name' => 'Name',
                'author' => 'Author',
                'performer' => 'Performer',
                'created_at' => 'Created At',
                'actions' => [
                    'title' => 'Actions',
                    'edit' => 'Edit',
                    'delete' => 'Delete',
                    'alert' => 'Are you sure?',
                    'no_data' => 'No data'
                ]
            ],
            'button' => 'New Task',
        ],
        'create' => [
            'title' => 'Create Task',
            'button' => 'Create',
        ],
        'edit' => [
            'title' => 'Edit Task',
            'button' => 'Update',
        ],
        'form' => [
            'name' => 'Name',
            'description' => 'Description',
            'status' => 'Status',
            'performer' => 'Performer',
            'labels' => 'Labels',
        ],
        'show' => [
            'title' => 'View Task',
            'name' => 'Name',
            'description' => 'Description',
            'status' => 'Status',
            'labels' => 'Labels',
        ],
        'filter' => [
            'author' => 'Author',
            'status' => 'Status',
            'performer' => 'Performer',
            'button' => 'Apply',
        ],
    ],
    'labels' => [
        'index' => [
            'title' => 'Labels',
            'table' => [
                'id' => 'ID',
                'name' => 'Name',
                'description' => 'Description',
                'created_at' => 'Created At',
                'actions' => [
                    'title' => 'Actions',
                    'edit' => 'Edit',
                    'delete' => 'Delete',
                    'alert' => 'Are you sure?',
                    'no_data' => 'No data'
                ]
            ],
            'button' => 'Create Label',
        ],
        'create' => [
            'title' => 'Create Label',
            'button' => 'Create',
        ],
        'edit' => [
            'title' => 'Edit Label',
            'button' => 'Update',
        ],
        'form' => [
            'name' => 'Name',
            'description' => 'Description',
        ],
    ]
];
