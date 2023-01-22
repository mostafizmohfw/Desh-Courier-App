<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        return view('backend.employee');
    }

    public function vehicles() {
        return view('backend.vehicles');
    }
}
