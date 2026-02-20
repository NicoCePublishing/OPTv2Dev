<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mard extends Model
{
    use HasFactory;

    protected $table = "prd.MARD";
    protected $guarded = [];
    protected $connection = "OMSL"; 
}
