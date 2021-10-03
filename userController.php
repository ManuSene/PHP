<?php

namespace App\Controllers;

use Core\Controller;
use Core\Request;

class UserController extends Controller {
    
    public function lista () {
        $this->view('userlist');
    }
  
    public function perfil(Request $request) {
        $username = $request->get();
        
        $this->view('perfil', ['username' => $username]);
    }
}
