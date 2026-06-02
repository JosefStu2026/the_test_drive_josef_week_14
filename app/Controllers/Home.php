<?php

namespace App\Controllers;

// 1. You MUST "use" the model at the top of the file so the Controller knows it exists
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }
}