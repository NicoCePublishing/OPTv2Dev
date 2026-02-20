<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPTv2FinalReq extends Model
{
    use HasFactory;

    protected $table = "OPTV2FINALREQ";
    protected $guarded = [];
    protected $connection = "mysql"; 
}
