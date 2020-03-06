<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'      =>'required',
            'email'     =>'required|email',
            'sex'       =>'required',
            'area'       =>'required_if:area,Select',
            'course'       =>'required',
        ]);

        $students = new Student();
        $students->name = $request->name;
        $students->email = $request->email;
        $students->sex = $request->sex;
        $students->area = $request->area;
        $students->course = $request->course;
        $students->save();
        return redirect()->route('show')->with('successmsg', 'Information added successfully!');
    }
    public function show(){
        $students = Student::latest()->get();
        return view('admin.index', compact('students'));
    }

    public function edit($id){
        $students = Student::findOrFail($id);
        return view('admin.edit',compact('students'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'name'  =>'required',
            'email'  =>'required|email',
            'sex'  =>'required',
            'area'  =>'required',
            'course'  =>'required',
        ]);
        // $students=Student::findOrFail($id);
        $students=[
            'name'  =>$request->name,
            'email'  =>$request->email,
            'sex'  =>$request->sex,
            'area'  =>$request->area,
            'course'  =>$request->course,
        ];
        //return $students;
        Student::whereId($id)->update($students);
        return redirect()->route('show')->with('successmsg', 'Information Updaetd!');

    }

    public function destroy($id){
        $students = Student::findOrFail($id);
        $students->delete();
        return redirect()->back()->with('successmsg', 'Deleted');
    }
}
