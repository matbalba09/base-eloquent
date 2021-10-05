<?php

namespace Database\Seeders;

use App\Helper\Helper;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('exam_types')->truncate();
        DB::table('exam_types')->insert(
            [
                [
                    'exam' => 'BLANKS',
                    'created_at' => Helper::getDateNow(),
                    'updated_at' => Helper::getDateNow(),
                ],
                [
                    'exam' => 'ESSAYS',
                    'created_at' => Helper::getDateNow(),
                    'updated_at' => Helper::getDateNow(),
                ],
                [
                    'exam' => 'CHOICES',
                    'created_at' => Helper::getDateNow(),
                    'updated_at' => Helper::getDateNow(),
                ],
            ]
        );
    }
}
