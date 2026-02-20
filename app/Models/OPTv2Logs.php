<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPTv2Logs extends Model
{
    use HasFactory;

    protected $table = "OPTV2LOGS";
    protected $guarded = [];
    protected $connection = "mysql"; 
}
