<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index() {
        //
        return view('auth.login');
    }
    
    public function authenticate() {
        //
    }
}
