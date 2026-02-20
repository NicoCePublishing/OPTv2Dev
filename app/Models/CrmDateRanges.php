<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrmDateRanges extends Model
{
    use HasFactory;

    protected $table = "prd.CRMDATERANGES";
    protected $guarded = [];
    protected $connection = "mysql"; 
    public $timestamps = false;
}
