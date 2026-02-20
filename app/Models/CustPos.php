<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustPos extends Model
{
    use HasFactory;

    protected $table = "prd.ZSD_CUSTPOS";
    protected $guarded = [];
    protected $connection = "OMSL"; 

}
