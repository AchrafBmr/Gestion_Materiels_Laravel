<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matereil extends Model
{
    use HasFactory;
    protected $fillable = ['id' , 'nom' , 'prix'];
}
