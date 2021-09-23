<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Templating extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Blog - Posts",
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
}
