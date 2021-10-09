<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(student $student){

       $student = student::all();
    //    return view('student',['posts'=>$student]);
       return view('std',['students'=>$student,'layout'=>'index']);
    }
    public function create(){
        $students = student::all();
       return view('std',['students'=>$students,'layout'=>'create']);

    }
    public function store(Request $req){
        $student = new student();
        $student->cne = $req->input('cne');
        $student->firstName = $req->input('firstName');
        $student->secondName = $req->input('secondName');
        $student->age = $req->input('age');
        $student->speciality = $req->input('speciality');
        $student->save();
        return redirect('/') ;
    }
    public function show($id){
        $student = student::find($id);
        $students = student::all();
        return view('std',['students'=>$students,'student'=>$student,'layout'=>'show']);

    }
    public function edit($id){
        $student = student::find($id);
        $students = student::all();
        return view('std',['students'=>$students,'student'=>$student,'layout'=>'edit']);
    }
    public function update(Request $req, $id){
        $student = student::find($id);
        $student->cne = $req->get('cne');
        $student->firstName = $req->get('firstName');
        $student->secondName = $req->get('secondName');
        $student->age = $req->get('age');
        $student->speciality = $req->get('speciality');
        $student->save();
        return redirect('/create') ;
    }
    public function destroy($id){
        $student = student::find($id);
        $student->delete();
        return redirect('/create') ;

    }
}