<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseLocation extends Model
{
    use HasFactory;

    protected $table = 'course_location_prices';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    // public function location(){
    //     return $this->belongsTo(Location::class, 'location_id', 'id');
    // }
}
