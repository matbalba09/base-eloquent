<?php

namespace Database\Seeders;

use App\Helper\Helper;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssessmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('assessment_types')->truncate();
        DB::table('assessment_types')->insert(
            [
                [
                    'assessment' => 'QUIZ',
                    'created_at' => Helper::getDateNow(),
                    'updated_at' => Helper::getDateNow(),
                ],
                [
                    'assessment' => 'TEST',
                    'created_at' => Helper::getDateNow(),
                    'updated_at' => Helper::getDateNow(),
                ],
            ]
        );
    }
}
