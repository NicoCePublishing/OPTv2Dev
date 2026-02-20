<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPTv2Notif extends Model
{
    use HasFactory;

    protected $table = "SALESITNOTIF";
    protected $guarded = [];
    protected $connection = "mysql"; 
}
