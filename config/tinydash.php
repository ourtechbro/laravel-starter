<?php

/*
 * Group Title empty to show separate section but as root menu
 * Items key = route name
 * Permission = permission to access. empty for public
 * Icon: from https://feathericons.com/
 */

return [
    'menu' => [
        'dashboard' => [
            'group_title' => '',
            'items' => [
                'dashboard' => [
                    'title' => 'Dashboard',
                    'icon_class' => 'fe fe-home',
                    'items' => [
                        'default' => ['title' => 'Default', 'slug' => 'default']
                    ]
                ]
            ]
        ],
        'administrator' => [
            'group_title' => 'Administrator',
            'items' => [
                'users' => [
                    'permission' => 'read users',
                    'title' => 'Users',
                    'icon_class' => 'fe fe-users'
                ],
                'roles' => [
                    'permission' => 'read roles',
                    'title' => 'Roles',
                    'icon_class' => 'fe fe-user-check',
                ],
                'permissions' => [
                    'permission' => 'read permissions',
                    'title' => 'Permissions',
                    'icon_class' => 'fe fe-key',
                ],
            ]
        ],
        'settings' => [
            'group_title' => 'Settings',
            'items' => [
                'settings.settings' => [
//                    'permission' => 'manage settings',
                    'title' => 'Settings',
                    'icon_class' => 'fe fe-settings'
                ],
                'settings.language' => [
//                    'permission' => 'manage settings',
                    'title' => 'Language',
                    'icon_class' => 'fe fe-file-text'
                ],
            ]
        ],
    ],
];
