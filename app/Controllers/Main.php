<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TasksModel;
use App\Models\UsuariosModel;

class Main extends BaseController
{
    public function index()
    {
        //
    }
    
    public function login()
    {
        return view('login_frm');
    }

    public function login_submit()
    {
        echo 'login submit';
    }
}
