<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZsdOmsd extends Model
{
    use HasFactory;

    protected $table = "prd.ZSD_OMSD";
    protected $guarded = [];
    protected $connection = "OMSL"; 
}
