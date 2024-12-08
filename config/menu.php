<?php
return [
    'main' => [
        'title' => 'Main',
        'items' => [
            [
                'label' => 'Dashboard',
                'icon' => 'fe fe-home',
                'route' => 'admin.dashboard',
                'active' => 'admin',
            ],
        ],
    ],
    'contacts' => [
        'items' => [
            [
                'label' => 'Contacts',
                'icon' => 'fe fe-book',
                'route' => 'admin.contacts.index',
                'active' => 'admin/contacts*',
            ],
        ],
    ],
    'teams' => [
        'items' => [
            [
                'label' => 'Teams',
                'icon' => 'fe fe-users',
                'route' => 'admin.teams.index',
                'active' => 'admin/teams*',
            ],
        ],
    ],
    'testimonials' => [
        'items' => [
            [
                'label' => 'Testimonials',
                'icon' => 'fe fe-star',
                'route' => 'admin.testimonials.index',
                'active' => 'admin/testimonials*',
            ],
        ],
    ],
    'careers' => [
        'items' => [
            [
                'label' => 'Careers',
                'icon' => 'fe fe-briefcase',
                'route' => 'admin.careers.index',
                'active' => 'admin/careers*',
            ],
        ],
    ],
    'tools' => [
        'title' => 'Tools & Management',
        'items' => [
            [
                'label' => 'Users',
                'icon' => 'fe fe-user',
                // 'route' => 'javascript:void(0)',
                'active' => 'admin/users*',
                'sub_items' => [
                    [
                        'label' => 'Manage Users',
                        'route' => 'admin.users.index',
                        'active' => 'admin/users*',
                    ],
                ],
            ],
        ],
    ],
];
