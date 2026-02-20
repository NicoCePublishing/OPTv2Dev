<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekko extends Model
{
    use HasFactory;

    protected $table = "prd.EKKO";
    protected $guarded = [];
    protected $connection = "OMSL"; 
}
