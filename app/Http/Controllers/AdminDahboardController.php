<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDahboardController extends Controller
{
    public function __construct() {
        return $this->middleware('auth');
    }
    //login if isent
    public function index() {
        return view("admin.dachboard");
    }
}
