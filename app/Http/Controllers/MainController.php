<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;





class MainController extends Controller
{
    public function home() {
        $data = [
            'name'=>'Kirtan',
            'age'=>17
        ];
        return view('welcome')->with($data);
    }

    public function profile(){
        $data1=[
            'username'=>'Kirtan'
        ];
        return view('profile')->with($data1);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $students= new Student();
        $students->name =$request->name;
        $students->address =$request->address;
        $students->age =$request->age;
        $students->dob =$request->dob;
        $students->save();



    }
    public function list(){
        $students=Student::orderby('name','asc')->get();
        return view('list')->with('students',$students);
    }
    public function edit($id) {
        $student = Student::find($id);
        return view('update')->with('student',$student);

    }

    public function update(Request $request){

        $students = Student::where('id',$request->id)->first();
        $students->name = $request->name;
        $students-> address= $request->address;
        $students->dob= $request->dob;



        return redirect('/list');
    }

    public function delete($id){
        $student=Student:: where('id',$id)->first();
        if(File::exists ("storage/image/" .$student -> image)){
            File::delete("storage/image". $student-> image);
        }
        $student->delete();
        return redirect('list');

    }


    }






