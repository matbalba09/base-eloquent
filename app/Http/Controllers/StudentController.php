<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function create(StudentRequest $request){
        $validated = $request->validated();
        return back()->with('success', 'User created successfully.');
    }
    public function show(){
        return view('pages.student');
    }

    public function testingGetuser(){
        $role = 'Student';
        if($role == 'Student'){
            $user = User::where('id', Auth::user()->id)->with('studentInfo')->first();
        }else{
            $user = User::where('id', Auth::user()->id)->with('teacherInfo')->first();
        }
        dd($user);
    }
}
