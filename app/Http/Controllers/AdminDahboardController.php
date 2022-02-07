<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDahboardController extends Controller
{
    //login if isent
    public function index() {
        return view("admin.dachboard");
    }
}
