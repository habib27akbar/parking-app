<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    public $timestamps = false;
    protected $fillable = ['plat', 'code', 'masuk', 'keluar'];
}
