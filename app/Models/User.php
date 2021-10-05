<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'info_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relationship to Student - Teacher.
     *
     **/
    public function studentInfo(){
        return $this->hasOne(Student::class, 'id', 'info_id');
    }
    public function teacherInfo(){
        return $this->hasOne(Teacher::class, 'id', 'info_id');
    }
    // public function info($role)
    // {
    //     if($role === "Teacher"){
    //         return $this->hasOne(Teacher::class, 'id', 'info_id');
    //     }elseif ($role === "Student"){
    //         return $this->hasOne(Student::class, 'id', 'info_id');
    //     }
    // }
     

}
