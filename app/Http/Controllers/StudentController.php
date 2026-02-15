<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentRegister(Request $request){
        $data = $request->validate([
            'first_name' => ['required','string','max:255'],
            'last_name' => ['required','string','max:255'],
            'student_number' => ['required','integer','unique:students'],
            'email' => ['required','string','email','max:255','unique:students'],
        ]);


        $loggedIn = Student::create($data);
        auth()->login($loggedIn);
        return 'test complete';
    }
}
