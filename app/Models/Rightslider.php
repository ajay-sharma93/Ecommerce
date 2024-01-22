<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rightslider extends Model
{
    use HasFactory;
    protected $table = "rightslider";
    protected $fillable = ['title', 'description'];
}
