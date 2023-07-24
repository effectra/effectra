<?php

return [
    'upload' => [
        'default_driver' => 'local',
        'types' => ['jpg','png'],
        'max_size'=>  209_715_200,//200MB
        'driver' => [
            'local' => [
                'dir' => public_path('uploads'),
            ]
        ]
    ]
];
