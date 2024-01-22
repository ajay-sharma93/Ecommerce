<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $table = "details";
    protected $fillable = ['name', 'price', 'ShortDes', 'sizes', 'colors', 'image1', 'image2', 'image3'];
}
