<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/config/database.php';

use App\Models\User;
use App\Models\Auth;





$user = User::create([
    'username' => 'analbanana4',
    'password' => password_hash('123456', PASSWORD_DEFAULT)
]);


echo "<pre>";

$users = User::all();
var_dump($users);


