<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZsdTs extends Model
{
    use HasFactory;

    protected $table = "prd.ZSD_TS";
    protected $guarded = [];
    protected $connection = "OMSL"; 
}
