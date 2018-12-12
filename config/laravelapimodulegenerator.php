<?php

return [
    'modules' => [
        'Auth' => [
            'enable' => true, // enable = true will generate the folder
            'folder_path' => app_path('Modules'), // root path to save the file, default is under your current local path: ../../app/
            'namespace' => 'App\Modules',  // class prefix namespace
            'uri' => [
                [
                    'uri' => '/pets',
                    'rules' => [
                        'name' => 'required',
                        'id' => 'integer'
                    ],
                    'method' => 'get',
                    'function' => 'getUsers',
                    'type' => 'web'// web, api
                ],
                [
                    'uri' => '/pets',
                    'rules' => [
                        'name' => 'required|nullable',
                        'id' => 'integer'
                    ],
                    'method' => 'post',
                    'function' => 'getUsers',
                    'type' => 'api'// web, api
                ],
            ],
            'models' => [
                'User'
            ]
        ]
    ]

];
