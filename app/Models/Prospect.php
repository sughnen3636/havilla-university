<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;

    protected $fillable = [
    	'f_name', 'l_name', 'o_name',
    	'course', 'phone', 'email'
    ];
}
