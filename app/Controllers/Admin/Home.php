<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'titulo'=>'| Area restringida',
        ];

        return view('Admin/Home/index', $data);
    }
}
