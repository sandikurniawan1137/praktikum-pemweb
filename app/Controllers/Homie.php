<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Homie extends BaseController
{
    public function index()
    {
        echo view('test_home');
    }

    public function lempar()
    {
        $request = \Config\Services::request();
        //$dataku['test'] = $this->input->post('data');
        $dataku['test'] = $request->getVar('data');
        echo view('test_view', $dataku);
    }
}
