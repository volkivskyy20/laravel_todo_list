<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registers extends Model
{
    use HasFactory;
    protected $table = 'registers';
    protected $fillable = ['task'];
}
