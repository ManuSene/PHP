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

    public function edit(Request $request) {
        $username = $request->get();
        $email = $request->post('email');
        $tel = $request->post('tel');
        $cep = $request->post('zipcode');
        //  $userData = $request->post();

        $this->view('update', ['username' => $username, 'email' => $email, 'tel' => $tel, 'cep' => $cep]);
    }
}
