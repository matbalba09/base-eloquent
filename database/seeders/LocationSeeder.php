<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Response;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('locations')->insert(
        //     [
        //         'name' => 'Philippines',
        //         'currency' => Response::PHILIPPINES,
        //     ],
        //     [
        //         'name' => 'USA',
        //         'currency' => Response::USA,
        //     ],
        // );
    }
}
