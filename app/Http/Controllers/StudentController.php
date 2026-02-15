<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function studentRegister(Request $request){
        $data = $request->validate([
            'first_name' => ['required','string','max:255'],
            'last_name' => ['required','string','max:255'],
            'student_number' => ['required','integer','unique:students'],
            'email' => ['required','string','email','max:255','unique:students'],
            'password' => ['required','string','min:8'],
        ]);

        $data['password'] = Hash::make($data['password']);

        $student = Student::create($data);

        auth()->login($student);

        $courses = Course::all();
        return view('studentdashboard', ['courses' => $courses])
            ->with('success', $student->first_name . ' ' . $student->last_name . ' has been registered successfully!');
    }



    public function studentLogin(Request $request){
        $credentials = $request->validate([
            'email' => ['required','string','email','max:255'],
            'password' => ['required','string'],
        ]);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            $courses = Course::all();
            return view('studentdashboard', ['courses' => $courses]);
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    
     public function studentLogout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
     }

     public function showALLStudent(Request $request){
          $students = Student::orderBy('student_number')->get();
          return view('allStudents', ['students' => $students]);
     }
}