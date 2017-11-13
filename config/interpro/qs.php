<?php

return [

    'static_all_site' => [
        'string' => ['phone'],
        'text'   => ['metrik_script', 'metrik_noscript']
    ],

    'hand_made' => [
        'text'  => ['sub_title', 'after_text'],
        'imageset' => ['slider' => 'slide'],
    ],
    'about_block' => [
        'image' => ['first_img', 'second_img'],
        'text'  => ['first_text', 'second_text']
    ],
    'how_we_work' => [
        'groups' => [
            'steps' => [
                'image' => ['pict'],
                'string' => ['title'],
                'text'  => ['descr'],
            ]
        ]
    ],
    'cooperation' => [
        'groups' => [
            'term' => [
                'string' => ['title'],
                'text'  => ['descr']
            ]
        ]
    ],
    'clients' => [
        'imageset' => ['clients_logo' => 'logo'],
        'groups' => [
            'client' => [
                'image' => ['photo'],
                'string' => ['client_name','prof','link','link_text'],
                'text'  => ['comment']
            ],
        ]
    ],
    'works' => [
        'imageset' => ['works_list' => 'work_item']
    ]
];
