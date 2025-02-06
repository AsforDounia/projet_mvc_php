<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Manager as DB;

class User extends Model {
    protected $table = 'users';
    protected $fillable = ['username', 'password', 'role'];
    public $timestamps = true;

    public function __construct(array $attributes = [])
    {
        // if (!isset($attributes['role'])) {
        //     $count = DB::table('users')->count();
        //     $attributes['role'] = ($count === 0) ? 'admin' : 'user';
        // }
        parent::__construct($attributes);
    }
}



?>