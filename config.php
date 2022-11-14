<?php

return[
    'database'=>[
        'connection'=>'mysql:host=localhost',
        'dbname'=>'mvcworkshop',
        'username'=>'root',
        'password'=>'',
        'optional'=>[
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        ]
    ]
];