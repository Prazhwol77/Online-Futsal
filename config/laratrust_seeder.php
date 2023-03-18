<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'Admin' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'Futsal'=>'c,r,u,d',
            'Booking'=>'r,u,d',
        ],
        'Futsal' => [
            'Booking'=>'c,r,u,d',
            'users' => 'r,u,d',
            'profile' => 'c,r,u,d',
        ],
        'user' => [
            'Booking'=>'c,r,u,d',
            'profile' => 'c,r,u,d'
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
