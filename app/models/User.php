<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['username', 'password', 'role'];
    public $timestamps = false;

    public function __construct($username = null, $password = null)
    {
        parent::__construct();
        
        if ($username !== null && $password !== null) {
            $this->username = $username;
            $this->password = $password;
            $this->role = self::count() === 0 ? 'admin' : 'user';
        }
    }
}

?>