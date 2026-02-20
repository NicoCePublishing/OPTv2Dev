<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T001L extends Model
{
    use HasFactory;

    protected $table = "prd.T001L";
    protected $guarded = [];
    protected $connection = "OMSL"; 
}
