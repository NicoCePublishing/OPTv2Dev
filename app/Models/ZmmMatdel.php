<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZmmMatdel extends Model
{
    use HasFactory;

    protected $table = "prd.ZMM_MATDEL";
    protected $guarded = [];
    protected $connection = "OMSL"; 
}
