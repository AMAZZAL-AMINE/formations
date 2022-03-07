<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\StudentsAccepted;
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

    //accept student
    public function accepetStudent($id) {
        $student = Student::findOrFail($id);
        $acceptStudet = new StudentsAccepted;
        $student->update([
            'is_accepted' => 1,
        ]);
        $acceptStudet->create(
            [
                'student_id' => $student->id,
            ]
        );

        return back()->with([
            'message' => 'Studetn Has Been Accepted With Success',
        ]);
    }

    //delete student if not qccepted,
    public function delete($id) {
        $student = Student::findOrFail($id);
        $student->delete();
        return back()->with([
            'message' => 'Studetn Has Been Accepted With Success',
        ]);
    }

    public function getStudentsAllowed() {
        $students = Student::where('is_accepted', 1)->latest()->take(25)->get();
        return view('admin.students.students', compact('students'));
    }

}