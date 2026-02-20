<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZsdOmsh extends Model
{
    use HasFactory;

    protected $table = "prd.ZSD_OMSH";
    protected $guarded = [];
    protected $connection = "OMSL"; 
}
