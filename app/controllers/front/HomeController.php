<?php
namespace App\Controllers\Front;
use App\Models\User;
use App\Core\Controller;

class HomeController extends Controller {
    public function index() {
        $users = User::all();
        $this->view('home', ['users' => $users]);
    }
}

