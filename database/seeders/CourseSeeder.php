<?php

namespace Database\Seeders;

use App\Response;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'title' => 'Course 1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere, mi eu volutpat hendrerit, arcu justo aliquet tellus, nec egestas nibh quam sit amet ipsum. Quisque efficitur, eros sed viverra rutrum, ligula libero luctus odio, vel viverra arcu ante at purus. Donec accumsan dui quis facilisis ultricies. Proin tempor et diam sit amet suscipit. Aenean vel iaculis tortor, eget cursus est. Duis justo nunc, vestibulum quis nisl in, tincidunt porttitor dui. In dictum ante consequat nunc gravida, nec sollicitudin felis pulvinar. Aenean dapibus justo hendrerit felis blandit rhoncus. Phasellus libero dui, pretium euismod risus ut, dapibus laoreet justo. Proin ex sapien, placerat vel odio a, congue fringilla erat. Integer vehicula lorem in sapien tincidunt blandit. Cras tincidunt, mi quis bibendum tempus, est quam consectetur turpis, vel accumsan leo mauris eget enim. Etiam ornare lacus non erat porta, quis maximus quam cursus.',
                'duration' => 4,
                'level' => 1,
                'image' => 'images/courses/37dd74c6308861b493ace9aa6c21e703-art-subject-illustration.jpg',
            ],
            [
                'title' => 'Course 2',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere, mi eu volutpat hendrerit, arcu justo aliquet tellus, nec egestas nibh quam sit amet ipsum. Quisque efficitur, eros sed viverra rutrum, ligula libero luctus odio, vel viverra arcu ante at purus. Donec accumsan dui quis facilisis ultricies. Proin tempor et diam sit amet suscipit. Aenean vel iaculis tortor, eget cursus est. Duis justo nunc, vestibulum quis nisl in, tincidunt porttitor dui. In dictum ante consequat nunc gravida, nec sollicitudin felis pulvinar. Aenean dapibus justo hendrerit felis blandit rhoncus. Phasellus libero dui, pretium euismod risus ut, dapibus laoreet justo. Proin ex sapien, placerat vel odio a, congue fringilla erat. Integer vehicula lorem in sapien tincidunt blandit. Cras tincidunt, mi quis bibendum tempus, est quam consectetur turpis, vel accumsan leo mauris eget enim. Etiam ornare lacus non erat porta, quis maximus quam cursus.',
                'duration' => 4,
                'level' => 2,
                'image' => 'images/courses/4006c2988af335fa80abf88911aa3cf0-spanish-subject-illustration.jpg',
            ],
            [
                'title' => 'Course 3',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere, mi eu volutpat hendrerit, arcu justo aliquet tellus, nec egestas nibh quam sit amet ipsum. Quisque efficitur, eros sed viverra rutrum, ligula libero luctus odio, vel viverra arcu ante at purus. Donec accumsan dui quis facilisis ultricies. Proin tempor et diam sit amet suscipit. Aenean vel iaculis tortor, eget cursus est. Duis justo nunc, vestibulum quis nisl in, tincidunt porttitor dui. In dictum ante consequat nunc gravida, nec sollicitudin felis pulvinar. Aenean dapibus justo hendrerit felis blandit rhoncus. Phasellus libero dui, pretium euismod risus ut, dapibus laoreet justo. Proin ex sapien, placerat vel odio a, congue fringilla erat. Integer vehicula lorem in sapien tincidunt blandit. Cras tincidunt, mi quis bibendum tempus, est quam consectetur turpis, vel accumsan leo mauris eget enim. Etiam ornare lacus non erat porta, quis maximus quam cursus.',
                'duration' => 4,
                'level' => 3,
                'image' => 'images/courses/52629f0b4c01ce3d81ab846e1db05861-health-subject-illustration.jpg',
            ],
            [
                'title' => 'Course 4',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere, mi eu volutpat hendrerit, arcu justo aliquet tellus, nec egestas nibh quam sit amet ipsum. Quisque efficitur, eros sed viverra rutrum, ligula libero luctus odio, vel viverra arcu ante at purus. Donec accumsan dui quis facilisis ultricies. Proin tempor et diam sit amet suscipit. Aenean vel iaculis tortor, eget cursus est. Duis justo nunc, vestibulum quis nisl in, tincidunt porttitor dui. In dictum ante consequat nunc gravida, nec sollicitudin felis pulvinar. Aenean dapibus justo hendrerit felis blandit rhoncus. Phasellus libero dui, pretium euismod risus ut, dapibus laoreet justo. Proin ex sapien, placerat vel odio a, congue fringilla erat. Integer vehicula lorem in sapien tincidunt blandit. Cras tincidunt, mi quis bibendum tempus, est quam consectetur turpis, vel accumsan leo mauris eget enim. Etiam ornare lacus non erat porta, quis maximus quam cursus.',
                'duration' => 4,
                'level' => 4,
                'image' => 'images/courses/141190608-online-language-courses-flat-vector-illustration-distance-education-remote-school-japan-university-l.jpg',
            ],
            [
                'title' => 'Course 5',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere, mi eu volutpat hendrerit, arcu justo aliquet tellus, nec egestas nibh quam sit amet ipsum. Quisque efficitur, eros sed viverra rutrum, ligula libero luctus odio, vel viverra arcu ante at purus. Donec accumsan dui quis facilisis ultricies. Proin tempor et diam sit amet suscipit. Aenean vel iaculis tortor, eget cursus est. Duis justo nunc, vestibulum quis nisl in, tincidunt porttitor dui. In dictum ante consequat nunc gravida, nec sollicitudin felis pulvinar. Aenean dapibus justo hendrerit felis blandit rhoncus. Phasellus libero dui, pretium euismod risus ut, dapibus laoreet justo. Proin ex sapien, placerat vel odio a, congue fringilla erat. Integer vehicula lorem in sapien tincidunt blandit. Cras tincidunt, mi quis bibendum tempus, est quam consectetur turpis, vel accumsan leo mauris eget enim. Etiam ornare lacus non erat porta, quis maximus quam cursus.',
                'duration' => 4,
                'level' => 1,
                'image' => 'images/courses/141190608-online-language-courses-flat-vector-illustration-distance-education-remote-school-japan-university-l.jpg',
            ],
            [
                'title' => 'Course 6',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere, mi eu volutpat hendrerit, arcu justo aliquet tellus, nec egestas nibh quam sit amet ipsum. Quisque efficitur, eros sed viverra rutrum, ligula libero luctus odio, vel viverra arcu ante at purus. Donec accumsan dui quis facilisis ultricies. Proin tempor et diam sit amet suscipit. Aenean vel iaculis tortor, eget cursus est. Duis justo nunc, vestibulum quis nisl in, tincidunt porttitor dui. In dictum ante consequat nunc gravida, nec sollicitudin felis pulvinar. Aenean dapibus justo hendrerit felis blandit rhoncus. Phasellus libero dui, pretium euismod risus ut, dapibus laoreet justo. Proin ex sapien, placerat vel odio a, congue fringilla erat. Integer vehicula lorem in sapien tincidunt blandit. Cras tincidunt, mi quis bibendum tempus, est quam consectetur turpis, vel accumsan leo mauris eget enim. Etiam ornare lacus non erat porta, quis maximus quam cursus.',
                'duration' => 4,
                'level' => 2,
                'image' => 'images/courses/141190608-online-language-courses-flat-vector-illustration-distance-education-remote-school-japan-university-l.jpg',
            ],
            [
                'title' => 'Course 7',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere, mi eu volutpat hendrerit, arcu justo aliquet tellus, nec egestas nibh quam sit amet ipsum. Quisque efficitur, eros sed viverra rutrum, ligula libero luctus odio, vel viverra arcu ante at purus. Donec accumsan dui quis facilisis ultricies. Proin tempor et diam sit amet suscipit. Aenean vel iaculis tortor, eget cursus est. Duis justo nunc, vestibulum quis nisl in, tincidunt porttitor dui. In dictum ante consequat nunc gravida, nec sollicitudin felis pulvinar. Aenean dapibus justo hendrerit felis blandit rhoncus. Phasellus libero dui, pretium euismod risus ut, dapibus laoreet justo. Proin ex sapien, placerat vel odio a, congue fringilla erat. Integer vehicula lorem in sapien tincidunt blandit. Cras tincidunt, mi quis bibendum tempus, est quam consectetur turpis, vel accumsan leo mauris eget enim. Etiam ornare lacus non erat porta, quis maximus quam cursus.',
                'duration' => 4,
                'level' => 3,
                'image' => 'images/courses/141190608-online-language-courses-flat-vector-illustration-distance-education-remote-school-japan-university-l.jpg',
            ],
            [
                'title' => 'Course 8',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere, mi eu volutpat hendrerit, arcu justo aliquet tellus, nec egestas nibh quam sit amet ipsum. Quisque efficitur, eros sed viverra rutrum, ligula libero luctus odio, vel viverra arcu ante at purus. Donec accumsan dui quis facilisis ultricies. Proin tempor et diam sit amet suscipit. Aenean vel iaculis tortor, eget cursus est. Duis justo nunc, vestibulum quis nisl in, tincidunt porttitor dui. In dictum ante consequat nunc gravida, nec sollicitudin felis pulvinar. Aenean dapibus justo hendrerit felis blandit rhoncus. Phasellus libero dui, pretium euismod risus ut, dapibus laoreet justo. Proin ex sapien, placerat vel odio a, congue fringilla erat. Integer vehicula lorem in sapien tincidunt blandit. Cras tincidunt, mi quis bibendum tempus, est quam consectetur turpis, vel accumsan leo mauris eget enim. Etiam ornare lacus non erat porta, quis maximus quam cursus.',
                'duration' => 4,
                'level' => 4,
                'image' => 'images/courses/141190608-online-language-courses-flat-vector-illustration-distance-education-remote-school-japan-university-l.jpg',
            ],
        ]);

        DB::table('locations')->insert([
            [
                'name' => 'Philippines',
                'currency' => Response::PHILIPPINES,
            ],
            [
                'name' => 'International',
                'currency' => Response::INTERNATIONAL,
            ],
        ]);

        DB::table('course_location_prices')->insert([
            [
                'course_id' => 1,
                'location_id' => 1,
                'price' => 100,
            ],
            [
                'course_id' => 2,
                'location_id' => 1,
                'price' => 100,
            ],
            [
                'course_id' => 3,
                'location_id' => 1,
                'price' => 100,
            ],
            [
                'course_id' => 4,
                'location_id' => 1,
                'price' => 100,
            ],
            [
                'course_id' => 5,
                'location_id' => 1,
                'price' => 100,
            ],
            [
                'course_id' => 6,
                'location_id' => 1,
                'price' => 100,
            ],
            [
                'course_id' => 7,
                'location_id' => 2,
                'price' => 100,
            ],
            [
                'course_id' => 8,
                'location_id' => 2,
                'price' => 100,
            ],
        ]);
    }
}
