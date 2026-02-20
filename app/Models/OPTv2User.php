<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPTv2User extends Model
{
    use HasFactory;

    protected $table = "OPTV2USER";
    protected $guarded = [];
    protected $connection = "mysql"; 
}
