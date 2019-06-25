<?php

namespace App\Http\Controllers;
use App\Student;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
 public function register(Request $request){


        $this->validate($request, [
            'fname'=> 'required',
            'sno'=> 'required',
            'addr'=> 'required',
            'dob'=> 'required'
        ]);
        $student = new Student;

        $studentNumber=$request->input('sno');
        
        $student->full_name = $request->input('fname');
        $student->id = $request->input('sno');
        $student->address = $request->input('addr');
        $student->dob = $request->input('dob');

        /*$student->save();

        return view('home');*/

		$result=$student->save();
        if($result){
		$sessionData=$request->session()->put('sno', $studentNumber);

	return back()->with('success','Registration successful');
	return back()->with('studentNumberSession','$studentNumber');
			}
		else{
	return back()->with('error','Failed to register. Please try again');
}

}

public function viewStudentstotalfees(){
    $records=Student::all()->transform(function($student, $key){
        $student['fees_total']=$student->fees()->get()->pluck('amount')->sum();
        return $student;
    });
    return view('viewfees',['records'=>$records]);
}

}
