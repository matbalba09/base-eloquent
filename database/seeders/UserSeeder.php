<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Teacher;
use App\Response;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('students')->insert(
            [
                'firstname' => 'Stu',
                'middlename' => 'D',
                'lastname' => 'Ent',
                'contact' => '09123456789',
                'age' => 12,
                'gender' => Response::MALE,
                'location' => Response::PHILIPPINES,
            ],
        );

        DB::table('teachers')->insert(
            [
                'firstname' => 'Teac',
                'middlename' => 'H',
                'lastname' => 'Ers',
                'contact' => '09123456789',
                'age' => 28,
                'gender' => Response::FEMALE,
                'location' => Response::PHILIPPINES,
                'rate' => 100,
            ],
        );

        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'username' => 'Reiy Mat',
                'email' => 'mat.balba09@gmail.com',
                'password' => Hash::make('password'),
                'role' => Response::ADMIN,
                'student_id' => null,
                'teacher_id' => null,
                'location_id' => 1,
            ],
            [
                'username' => 'Rhimart',
                'email' => 'rhimartbravo@gmail.com',
                'password' => Hash::make('password'),
                'role' => Response::ADMIN,
                'student_id' => null,
                'teacher_id' => null,
                'location_id' => 1,
            ],
            [
                'username' => 'Ivan',
                'email' => 'ivanmatthewferrer@gmail.com',
                'password' => Hash::make('password'),
                'role' => Response::ADMIN,
                'student_id' => null,
                'teacher_id' => null,
                'location_id' => 1,
            ],
            [
                'username' => 'Student',
                'email' => 'student@gmail.com',
                'password' => Hash::make('password'),
                'role' => Response::STUDENT,
                'student_id' => 1,
                'teacher_id' => null,
                'location_id' => 2,
            ],
            [
                'username' => 'Teacher',
                'email' => 'teacher@gmail.com',
                'password' => Hash::make('password'),
                'role' => Response::TEACHER,
                'teacher_id' => 1,
                'student_id' => null,
                'location_id' => 1,
            ],
        ]
        );
    }
}
