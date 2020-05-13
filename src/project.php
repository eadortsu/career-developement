<?php

namespace App;

use App\Login\Login;
use App\Register\Register;

class Project
{
    public $db;
    public function login()
    {
        $login = new Login($this->db);
        return $login->loadLoginView();
    }

    public function register()
    {
        $register = new Register($this->db);
        return $register->create();
    }
}
