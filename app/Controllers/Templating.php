<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Templating extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => "Admin",
            'nama' => "Sandi"
        ];
        /*
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('v_posts'); //bisa menampilkan banyak view
        echo view('layouts/footer');
        */
        //return view('v_posts'); //hanya bisa menampilkan 1 view
        return view('view_admin');
    }
    public function reg()
    {
        $data = [
            'title' => "Register",
            'nama' => "Sandi"
        ];
        /*
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('v_posts'); //bisa menampilkan banyak view
        echo view('layouts/footer');
        */
        //return view('v_posts'); //hanya bisa menampilkan 1 view
        return view('v_register',$data);
    }

    public function saveRegister()
    {
        $request = service('request');
        $data = [
            'user_fullname'  => $request->getVar('fullname'),
            'user_email'     => $request->getVar('email'),
            'user_password'  => $request->getVar('password'),
        ];
        $this->userModel->insert($data);
        return redirect()->to('/register');
    }
}
