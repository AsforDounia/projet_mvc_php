<?php

namespace App\Models;

class Auth
{
    public $att;
    public function __construct($att)
    {
        $this->att = $att;
    }
}