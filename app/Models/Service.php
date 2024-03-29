<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // The attributes that are mass assignable
    protected $fillable = [
        'title', 'description'
    ];

    // This will tell Laravel not to include the updated_at 
    public $timestamps = false;


    /*
    |--------------------------------------------------------------------------
    | Accessors
    |--------------------------------------------------------------------------
    */

    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }
}
