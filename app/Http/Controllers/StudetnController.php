<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudetnController extends Controller
{
    //store adat of student in database
    public function store(Request $request) {
        
        $data = $request->validate([
            'username' => 'required',
            'cin' => 'required',
            'cin_img' => 'required|image',
            'phone' => 'required',
            'formation' => 'required',
            'type_learn' => 'required'
        ]);

        $student = new Student;

        if($request->hasFile('cin_img')) {
            $img_cin = request('cin_img')->store('students-images', 'public');
        }


        $student->create(
            [
                'name' => $data['username'],
                'cin' => $data['cin'],
                'cin_img' => $img_cin,
                'phone' => $data['phone'],
                'fomation_id' => $data['formation'],
                'type_learn' => $data['type_learn']
            ]
        );

        return back()->with(
            [
                "message" => "Thanks To You, Yoor Data Has Been Seent With Success, Be Ready We Will Call You Insh allah",
            ]
        );
        
    }

    //requests of students
    public function requests() {
        $students  = Student::all();

        return view("admin.students.requests", compact("students"));
    }
}
