<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class studentcontroller extends Controller
{
    public function index()
    {
        $students=Student::paginate(10);

        return view('welcome',compact('students'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        $student = new Student;
        $student->first_name = $request->firstname;
        $student->last_name = $request->lastname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        return redirect(Route('home'))->with('successMsg', 'Successfully Added Data');
    }

    public function edit($id){
        $students = Student::find($id);
        return view('edit',compact('students'));

    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        $student = Student::find($id);
        $student->first_name = $request->firstname;
        $student->last_name = $request->lastname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        return redirect(Route('home'))->with('successMsg', 'Successfully Editerd Data');

    }

    public function delete($id){
        Student::find($id)->delete();
        return redirect(route('home'))->with('successMsg', 'Successfully Deleted');

    }
}
