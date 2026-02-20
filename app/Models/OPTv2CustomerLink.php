<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPTv2CustomerLink extends Model
{
    use HasFactory;

    protected $table = "OPTV2CUSTOMERLINK";
    protected $guarded = [];
    protected $connection = "mysql"; 
}
