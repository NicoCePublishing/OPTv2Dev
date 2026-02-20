<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrmUsers extends Model
{
    use HasFactory;

    protected $table = "prd.CRMUSERS";
    protected $guarded = [];
    protected $connection = "mysql"; 
}
