<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrmProjection extends Model
{
    use HasFactory;

    protected $table = "prd.CRMPROJECTION";
    protected $guarded = [];
    protected $connection = "mysql"; 
    public $timestamps = false;
}
