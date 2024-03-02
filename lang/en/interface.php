<?php

return [
    'title' => 'Todos',
    'welcome' => 'Welcome to Todos!',
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
        'title' => 'Register in Todos',
        'name' => 'Name',
        'email' => 'Email',
        'password' => 'Password',
        'confirm_password' => 'Confirmation',
        'already_registered' => 'Already registered?',
        'button' => 'Register',
    ],
    'profile' => [
        'title' => 'Profile',
        'info' => 'Profile information',
        'info_update' => 'Update your Name or email',
        'name' => 'Name',
        'email' => 'Email',
        'email_unverified' => 'Your email is not verified.',
        'email_resend' => 'Click here to resend the verification email.',
        'email_resented' => 'A verification email has been sent to your email.',
        'password' => 'Password',
        'password_info' => 'To ensure security, use a long random password for your account.',
        'password_update' => 'Update password',
        'password_current' => 'Current password',
        'password_new' => 'New password',
        'password_confirm' => 'Confirm password',
        'button_save' => 'Save',
        'saved' => 'Saved',
        'delete' => 'Delete account',
        'delete_info' => 'Upon deleting your account, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information you wish to retain.',
        'button_delete' => 'Delete account',
    ],
    'task_statuses' => [
        'index' => [
            'title' => 'Statuses',
            'table' => [
                'id' => 'ID',
                'name' => 'Name',
                'actions' => 'Actions'
            ],
            'button' => 'New status',
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
                'created_at' => 'Creation date',
                'actions' => 'Actions'
            ],
            'button' => 'New task',
        ],
        'create' => [
            'title' => 'Create task',
            'button' => 'Create',
        ],
        'edit' => [
            'title' => 'Edit task',
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
            'title' => 'View task',
            'name' => 'Name',
            'description' => 'Description',
            'status' => 'Status',
            'labels' => 'Labels',
        ],
    ],
    'labels' => [
        'index' => [
            'title' => 'Labels',
            'table' => [
                'id' => 'ID',
                'name' => 'Name',
                'description' => 'Description',
                'created_at' => 'Creation date',
                'actions' => 'Actions'
            ],
            'button' => 'Create label',
        ],
        'create' => [
            'title' => 'Create label',
            'button' => 'Create',
        ],
        'edit' => [
            'title' => 'Edit label',
            'button' => 'Update',
        ],
        'form' => [
            'name' => 'Name',
            'description' => 'Description',
        ],
    ]
];


