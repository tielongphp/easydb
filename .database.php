<?php


$mysqlBaseConfig = [
    'database_type' => 'mysql',
    'server' => '127.0.0.1',
    'username' => 'root',
    'password' => 'root',
    'port' => 3306,
    'charset' => 'UTF8',
    'prefix' => '',
    'option' => [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION],
    'exec' => ['set autocommit=1']
];


return [

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course
    */
    'connections' => [
        // 设置默认连接库
        'default' => array_merge($mysqlBaseConfig, [
            'database_name' => 'User1',// dbName
        ]),
        // 设置连接库
        'mysqlUser' => array_merge($mysqlBaseConfig, [
            'database_name' => 'User2',
        ])
    ]

];
