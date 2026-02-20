<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekpo extends Model
{
    use HasFactory;

    protected $table = "prd.EKPO";
    protected $guarded = [];
    protected $connection = "OMSL"; 
}
