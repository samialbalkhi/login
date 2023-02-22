<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function athe()
    {
        return view('CustomAuth.Custom');
    }
    public function site()
    {
        return view('Site');
    }
    public function admin()
    {
        return view('Admin');
    }
}
