<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPTv2Allocated extends Model
{
    use HasFactory;

    protected $table = "OPTV2ALLOCATED";
    protected $guarded = [];
    protected $connection = "mysql"; 
}
