<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZprUsers extends Model
{
    use HasFactory;

    protected $table = "prd.ZPR_USERS";
    protected $guarded = [];
    protected $connection = "prd"; 
}
