<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // The attributes that are mass assignable
    protected $fillable = [
        'name', 'text', 'email'
    ];

    // This will tell Laravel not to include the updated_at 
    public $timestamps = false;
}
