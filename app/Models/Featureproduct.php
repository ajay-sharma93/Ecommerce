<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Featureproduct extends Model
{
    use HasFactory;
    protected $table = "_featureproduct";
    protected $fillable = ['name', 'price', 'image'];
}
