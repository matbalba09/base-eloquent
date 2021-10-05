<?php

namespace App\Repositories;

use App\Response;
use App\Models\User;
use App\Helper\Helper;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\TeacherRequest;

class TeacherRepository
{
    public function create(TeacherRequest $request){
        $validated = $request->validated();
        return back()->with('success', 'User created successfully.');
    }
    
    public function show(){
        return view('pages.teacher');
    }

    public function store(TeacherRequest $teacherRequest)
    {
        $validated = $teacherRequest->validated();

        $name = $teacherRequest->firstname.$teacherRequest->middlename.$teacherRequest->lastname;

        $destinationPath = Response::TEACHER_IMAGE_PATH.'/'.$name;
        $path = Helper::saveFile($teacherRequest->file('avatar'), $destinationPath, $name);

        $teacher = Teacher::create([
            'firstname' => $teacherRequest->firstname,
            'middlename' => $teacherRequest->middlename,
            'lastname' => $teacherRequest->lastname,
            'suffix' => $teacherRequest->suffix,
            'contact' => $teacherRequest->contact,
            'age' => $teacherRequest->age,
            'gender' => $teacherRequest->gender,
            'location' => $teacherRequest->location,
            'avatar' => $path,
        ]);
        
        // $fullname = $teacherRequest->firstname.$teacherRequest->middlename.$teacherRequest->lastname.$teacherRequest->suffix;
        $password = Helper::generateRandomString(14);
        $hashedPassword = Hash::make($password);
        $role = Response::TEACHER;

        $user = new User();
        $user->username = $teacherRequest->firstname;
        $user->email = $teacherRequest->email;
        $user->password = $hashedPassword;
        $user->role = $role;
        $user->teacher_id = $teacher->id;
        $user->save();

        $title = 'Account Creator';
        $body = 'email: '.$teacherRequest->email.' password: '.$password;

        $sendEmail = Helper::sendEmail($teacherRequest->email, $title, $body);

        return [$teacher,$user];
        // return [$teacher,$password,$teacher->id,$role];
    }
}
