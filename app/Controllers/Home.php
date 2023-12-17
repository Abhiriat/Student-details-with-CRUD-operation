<?php

namespace App\Controllers;
use App\Models\Student;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
   
  
}