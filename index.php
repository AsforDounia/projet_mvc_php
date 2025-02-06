<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/config/database.php';


use App\Models\User;

echo "<pre>";

$users = User::count();
var_dump($users);


$user = User::create([
    'username' => 'user7',
    'password' => password_hash('123456', PASSWORD_DEFAULT)
]);

$users = User::all();
var_dump($users);



