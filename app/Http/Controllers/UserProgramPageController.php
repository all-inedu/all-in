<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProgramPageController extends Controller
{
    public function index()
    {
        return view('layout.user.programs.main');
    }
}
