<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('galleries')->delete();
        
        DB::table('galleries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Raphael',
                'path' => 'images/galleries/Raphael\\Raphael.jpg',
                'created_at' => '2021-08-28 10:17:54',
                'updated_at' => '2021-08-28 10:17:54',
                'client_type' => 'filipino',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Rihanna',
                'path' => 'images/galleries/Rihanna\\rihanna2.jpg',
                'created_at' => '2021-08-28 10:23:50',
                'updated_at' => '2021-08-28 10:23:50',
                'client_type' => 'filipino',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Sofia Reese',
                'path' => 'images/galleries/Sofia Reese\\Sofia Reese.jpg',
                'created_at' => '2021-08-28 10:24:05',
                'updated_at' => '2021-08-28 10:24:05',
                'client_type' => 'filipino',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Student',
                'path' => 'images/galleries/Student\\student.jpg',
                'created_at' => '2021-08-28 10:24:23',
                'updated_at' => '2021-08-28 10:24:23',
                'client_type' => 'filipino',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Sunshine',
                'path' => 'images/galleries/Sunshine\\Sunshine.jpeg',
                'created_at' => '2021-08-28 10:24:34',
                'updated_at' => '2021-08-28 10:24:34',
                'client_type' => 'filipino',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Zach',
                'path' => 'images/galleries/Zach\\Zach.jpeg',
                'created_at' => '2021-08-28 10:24:53',
                'updated_at' => '2021-08-28 10:24:53',
                'client_type' => 'filipino',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Zyla',
                'path' => 'images/galleries/Zyla\\Zyla.jpg',
                'created_at' => '2021-08-28 10:25:07',
                'updated_at' => '2021-08-28 10:25:07',
                'client_type' => 'foreign',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Apple Angie',
                'path' => 'images/galleries/Apple Angie\\AppleAngie.jpg',
                'created_at' => '2021-08-28 10:25:28',
                'updated_at' => '2021-08-28 10:25:28',
                'client_type' => 'foreign',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Bear',
                'path' => 'images/galleries/Bear\\Bear.jpg',
                'created_at' => '2021-08-28 10:26:09',
                'updated_at' => '2021-08-28 10:26:09',
                'client_type' => 'foreign',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Casper',
                'path' => 'images/galleries/Casper\\Casper1.jpg',
                'created_at' => '2021-08-28 10:26:21',
                'updated_at' => '2021-08-28 10:26:21',
                'client_type' => 'foreign',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Cindy',
                'path' => 'images/galleries/Cindy\\Cindy.jpg',
                'created_at' => '2021-08-28 10:26:35',
                'updated_at' => '2021-08-28 10:26:35',
                'client_type' => 'foreign',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Luna',
                'path' => 'images/galleries/Luna\\Luna.jpg',
                'created_at' => '2021-08-28 10:26:46',
                'updated_at' => '2021-08-28 10:26:46',
                'client_type' => 'foreign',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Masashi',
                'path' => 'images/galleries/Masashi\\Masashi.jpg',
                'created_at' => '2021-08-28 10:26:56',
                'updated_at' => '2021-08-28 10:26:56',
                'client_type' => 'foreign',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Summer Chinese',
                'path' => 'images/galleries/Summer Chinese\\SummerChinese.jpg',
                'created_at' => '2021-08-28 10:27:17',
                'updated_at' => '2021-08-28 10:27:17',
                'client_type' => 'foreign',
            ),
        ));
    }
}