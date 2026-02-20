<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZsdBsad extends Model
{
    use HasFactory;

    protected $table = "prd.ZSD_BSAD";
    protected $guarded = [];
    protected $connection = "OMSL"; 
}
