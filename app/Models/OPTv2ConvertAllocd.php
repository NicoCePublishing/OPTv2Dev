<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPTv2ConvertAllocd extends Model
{
    use HasFactory;

    protected $table = "OPTV2CONVERTALLOCD";
    protected $guarded = [];
    protected $connection = "mysql"; 
}
