<?php

namespace App\Helper;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mail as SendMail;

class Helper
{
    public static function generateRandomString($length)
    {
        $alpha = "QWERTYUIOPASDFGHJKLZXCVBNM";
        $returnData = "";
        for ($i = 0; $i < $length; $i++) {
            $returnData .= $alpha[rand(0, strlen($alpha) - 1)];
        }
        return $returnData;
    }

    public static function generateRandomNumber($length)
    {
        $returnData = "";
        for ($i = 0; $i < $length; $i++) {
            $returnData .= rand(0, 9);
        }
        return $returnData;
    }

    public static function getDateNow()
    {
        return Carbon::now()->format('Y-m-d H:i:s');
    }

    public static function getAddedDays($number)
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');
        $date = strtotime("+$number days", strtotime($date));
        return $date;
    }

    public static function getRole(){
        $userRole = Auth::user()->role;
        return $userRole;
    }

    public static function saveFile($file, $destination, $name=null){
        $files = $file; // will get all files
        $file_name = $files->getClientOriginalName(); //Get file original name
        $path =  $files->move($destination , $file_name); // move files to destination folder
        return $path;
    }

    public static function sendEmail($email, $title, $body)
    {
        $details = [
            'title' => $title,
            'body' => $body,
        ];

        Mail::to($email)->send(new SendMail($details));
        return "Email Sent.";
    }
}