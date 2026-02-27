<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // This "unlocks" the fields so you can save data into them
    protected $fillable = ['title', 'text']; 
}