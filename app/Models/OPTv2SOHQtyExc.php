<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPTv2SOHQtyExc extends Model
{
    use HasFactory;

    protected $table = "OPTV2SOHQTYEXC";
    protected $guarded = [];
    protected $connection = "mysql"; 
}
