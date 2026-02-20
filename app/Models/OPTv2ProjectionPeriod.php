<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPTv2ProjectionPeriod extends Model
{
    use HasFactory;

    protected $table = "OPTV2PROJECTIONPERIOD";
    protected $guarded = [];
    protected $connection = "mysql"; 
}
