<?php

namespace App\Models;

use App\Models\Location;
use App\Response;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function Location()
    {
        $user = Auth::user();
        
        return $this->belongsToMany(Location::class, 'course_location_prices', 'course_id', 'location_id')->withPivot('price')->wherePivot('location_id', '=', $user ? $user->location_id : Response::DEFAULT_LOCATION);
    }
}
