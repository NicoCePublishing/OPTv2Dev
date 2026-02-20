<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mara extends Model
{
    use HasFactory;

    protected $table = "prd.MARA";
    protected $guarded = [];
    protected $connection = "OMSL"; 
}
