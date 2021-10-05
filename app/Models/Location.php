<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function course(){
        return $this->belongsToMany(Course::class, 'course_location_prices', 'location_id', 'course_id');
    }
}
