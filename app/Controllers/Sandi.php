<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Sandi extends BaseController
{
    public function index()
    {
        echo view('index1');
    }

    public function test()
    {
        $request = \Config\Services::request();
        $dataku1['test1'] = $request->getVar('data1');
        $dataku2['test2'] = $request->getVar('data2');
        echo view('index2', $dataku1+$dataku2);
    }
}
