<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPTv2Files extends Model
{
    use HasFactory;

    protected $table = "OPTV2FILES";
    protected $guarded = [];
    protected $connection = "mysql"; 
}
