<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BOT extends Model
{
    use HasFactory;

    protected $fillable = ['bio', 'img', 'name'];
}
