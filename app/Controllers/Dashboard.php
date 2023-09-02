<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashbaord'
        ];
        return view('dashboard', $data);
    }
    public function helloo()
    {
        $data = [
            'title' => 'Hello page'
        ];
        return view('hello', $data);
    }
}
