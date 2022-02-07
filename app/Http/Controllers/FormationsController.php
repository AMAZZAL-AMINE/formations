<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationsController extends Controller
{
    //required the authentications
    public function __construct()
    {
        return $this->middleware('auth');
    }

    //get all formations
    public function index() {
        $formations = Formation::all();
        return view("admin.Formations.index", compact('formations'));
    }
    

    //create formations
    public function create(Request $request)
    {
        return view("admin.Formations.create");
    }
}