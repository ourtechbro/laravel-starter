<?php

/*
 * Group Title empty to show seperate section but as root menu
 */

return [
    'menu' => [
        'dashboard' => [
            'group_title' => '',
            'items' => [
                'dashboard' => [
                    'title' => 'Dashboard',
                    'icon_class' => 'fe fe-home fe-16',
                    'items' => [
                        'default' => ['title' => 'Default', 'slug' => 'default'],
                        'analytics' => ['title' => 'Analytics', 'slug' => 'analytics'],
                        'ecommerce' => ['title' => 'E-Commerce', 'slug' => 'ecommerce'],
                        'saas' => ['title' => 'SaaS', 'slug' => 'saas'],
                        'system' => ['title' => 'System', 'slug' => 'system']
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
                    'icon_class' => 'fe fe-home fe-16'
                ],
//                'roles' => [
//                    'title' => 'Roles',
//                    'icon_class' => 'fe fe-home fe-16',
//                    'items' => [
//                        'default' => ['title' => 'Default', 'slug' => 'default'],
//                        'analytics' => ['title' => 'Analytics', 'slug' => 'analytics'],
//                    ]
//                ],
            ]
        ],
        'components' => [
            'group_title' => 'Components',
            'items' => [
                'ui-elements' => [
                    'title' => 'UI elements',
                    'icon_class' => 'fe fe-box fe-16',
                    'items' => [
                        'colors' => ['title' => 'Colors', 'slug' => 'colors', 'permission' => 'view theme'],
                        'typography' => ['title' => 'Typography', 'slug' => 'typography'],
                        'icons' => ['title' => 'Icons', 'slug' => 'icons'],
                        'buttons' => ['title' => 'Buttons', 'slug' => 'buttons'],
                        'notifications' => ['title' => 'Notifications', 'slug' => 'notifications'],
                        'modals' => ['title' => 'Modals', 'slug' => 'modals'],
                        'tabs_and_accordion' => ['title' => 'Tabs & Accordion', 'slug' => 'tabs_and_accordion'],
                        'progress' => ['title' => 'Progress', 'slug' => 'progress'],
                    ]
                ],
                'widgets' => [
                    'title' => 'Widgets',
                    'icon_class' => 'fe fe-layers fe-16'
                ],
                'forms' => [
                    'title' => 'Forms',
                    'icon_class' => 'fe fe-credit-card fe-16',
                    'items' => [
                        'basic_elements' => ['title' => 'Basic Elements', 'slug' => 'basic-elements'],
                        'advanced_elements' => ['title' => 'Advanced Elements', 'slug' => 'advanced-elements'],
                        'validation' => ['title' => 'Validation', 'slug' => 'validation'],
                        'wizard' => ['title' => 'Wizard', 'slug' => 'wizard'],
                        'layouts' => ['title' => 'Layouts', 'slug' => 'layouts'],
                        'file_upload' => ['title' => 'File Upload', 'slug' => 'file-upload']
                    ]
                ],
                'tables' => [
                    'title' => 'Tables',
                    'icon_class' => 'fe fe-grid fe-16',
                    'items' => [
                        'basic_tables' => ['title' => 'Basic Tables', 'slug' => 'basic-tables'],
                        'advanced_tables' => ['title' => 'Advanced Tables', 'slug' => 'advanced-tables'],
                        'data_tables' => ['title' => 'Data Tables', 'slug' => 'data-tables']
                    ]
                ],
                'charts' => [
                    'title' => 'Charts',
                    'icon_class' => 'fe fe-pie-chart fe-16',
                    'items' => [
                        'inline_chart' => ['title' => 'Inline Chart', 'slug' => 'inline-chart'],
                        'chartjs' => ['title' => 'ChartJS', 'slug' => 'chartjs'],
                        'apex_charts' => ['title' => 'ApexCharts', 'slug' => 'apex-charts'],
                        'datamaps' => ['title' => 'Datamaps', 'slug' => 'datamaps']
                    ]
                ],
            ]
        ],
        'apps' => [
            'group_title' => 'Apps',
            'items' => [
                'calender' => [
                    'title' => 'Calender',
                    'icon_class' => 'fe fe-calendar fe-16'
                ],
                'contacts' => [
                    'title' => 'Contacts',
                    'icon_class' => 'fe fe-book fe-16',
                    'items' => [
                        'contact-list' => ['title' => 'Contact List'],
                        'contact-grid' => ['title' => 'Contact Grid'],
                        'new-contact' => ['title' => 'New Contact']
                    ]
                ],
                'profile' => [
                    'title' => 'Profile',
                    'icon_class' => 'fe fe-user fe-16',
                    'items' => [
                        'overview' => ['title' => 'Overview'],
                        'settings' => ['title' => 'Settings'],
                        'security' => ['title' => 'Security'],
                        'notifications' => ['title' => 'Notification Settings']
                    ]
                ],
                'file-manager' => [
                    'title' => 'File Manager',
                    'icon_class' => 'fe fe-folder fe-16',
                    'items' => [
                        'files-list' => ['title' => 'Files List'],
                        'files-grid' => ['title' => 'Files Grid'],
                    ]
                ],
                'help-desk' => [
                    'title' => 'Help Desk',
                    'icon_class' => 'fe fe-compass fe-16',
                    'items' => [
                        'home' => ['title' => 'Home', 'slug' => 'home'],
                        'tickets' => ['title' => 'Tickets', 'slug' => 'tickets'],
                        'ticket_detail' => ['title' => 'Ticket Detail', 'slug' => 'ticket-detail'],
                        'faq' => ['title' => 'FAQs', 'slug' => 'faq']
                    ]
                ],
            ]
        ],
        'extra' => [
            'group_title' => 'Extra',
            'items' => [
                'pages' => [
                    'title' => 'Pages',
                    'icon_class' => 'fe fe-file fe-16',
                    'items' => [
                        'orders' => ['title' => 'Orders', 'slug' => 'orders'],
                        'timeline' => ['title' => 'Timeline', 'slug' => 'timeline'],
                        'invoice' => ['title' => 'Invoice', 'slug' => 'invoice'],
                        'page_404' => ['title' => 'Page 404', 'slug' => 'page-404'],
                        'page_500' => ['title' => 'Page 500', 'slug' => 'page-500'],
                        'blank' => ['title' => 'Blank', 'slug' => 'blank'],
                    ]
                ],
                'authentication' => [
                    'title' => 'Authentication',
                    'icon_class' => 'fe fe-shield fe-16',
                    'items' => [
                        'login_1' => ['title' => 'Login 1', 'slug' => 'login-1'],
                        'login_2' => ['title' => 'Login 2', 'slug' => 'login-2'],
                        'register' => ['title' => 'Register', 'slug' => 'register'],
                        'reset_password' => ['title' => 'Reset Password', 'slug' => 'reset-password'],
                        'confirm_password' => ['title' => 'Confirm Password', 'slug' => 'confirm-password']
                    ]
                ],
                'layout' => [
                    'title' => 'Layout',
                    'icon_class' => 'fe fe-layout fe-16',
                    'items' => [
                        'default' => ['title' => 'Default', 'slug' => 'default'],
                        'top_navigation' => ['title' => 'Top Navigation', 'slug' => 'top-navigation'],
                        'boxed' => ['title' => 'Boxed', 'slug' => 'boxed']
                    ]
                ]
            ]
        ],
    ],
];
