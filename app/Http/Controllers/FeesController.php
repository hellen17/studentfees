<?php

namespace App\Http\Controllers;

use App\Fees;
use App\Student;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    //

 public function fees(Request $request){
        $this->validate($request, [
            'sno'=> 'required',
            'amount'=> 'required',
        ]);
        $fees = new Fees;
        
        $fees->student_id = $request->input('sno');
        $fees->amount = $request->input('amount');
        $fees->paymentdate = $request->input('paymentdate');


        $fees->save();

        return view('home');
}

public function search(Request $request){
    $records = [];
    $student = null;
    if($request->input('student_id')) {
        $student = Student::find($request->input('student_id'));
        if($student) {
            $records = $student->fees()->get();
        }
    }

    return view ('search', [
    	'records'=>$records,
    	'student'=>$student
    	
    ]);
}



}
