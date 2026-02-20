<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPTv2UserAccess extends Model
{
    use HasFactory;

    protected $table = "SALESITUSERACCESS";
    protected $guarded = [];
    protected $connection = "mysql"; 
}
