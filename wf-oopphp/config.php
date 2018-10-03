<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */
/**
 * @database - configuration for PDO()
 */


return [
    'database' => [
        'name' => 'boardgamesapp',
        'username' => 'root',
        'password' => 'hallo531',
        'connection' => 'mysql:host=localhost:3306', 
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];
