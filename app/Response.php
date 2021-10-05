<?php

namespace App;

use App\Helper\Helper;
use Illuminate\Support\Facades\Auth;

class Response 
{

const ADMIN = 3;
const STUDENT = 2;
const TEACHER = 1;

const MALE = 1;
const FEMALE = 2;

const MUST_BE_A_STRING = 'must be a string';
const MUST_BE_A_NUMBER = 'must be a number';
const MUST_BE_AN_EMAIL = 'must be an email';
CONST MUST_BE_UNIQUE = 'must be unique';
const REQUIRED = 'is required';
const MUST_BE_AN_INTEGER = "must be an integer";
const MUST_BE_AN_IMAGE = "must be an image";

const COURSE_IMAGE_PATH = 'images/courses';
const GALLERY_IMAGE_PATH = 'images/galleries';
const TEACHER_IMAGE_PATH = 'images/teachers';

const CURRENCY = [
    'PH' => '₱',
    'NON_PH' => '$',
];

const PHILIPPINES = 'PH';
const INTERNATIONAL = 'NON_PH';

const DEFAULT_LOCATION = 1;
}



?>