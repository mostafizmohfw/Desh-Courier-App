<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackEndController extends Controller
{
    public function index() {
        return view('backend.dashboard');
    }

    public function login() {
        return view('backend.login');
    }

    public function location() {
        return view('backend.location');
    }

    public function profile() {
        return view('backend.user_profile');
    }
}
