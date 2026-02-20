<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPTv2Inventory extends Model
{
    use HasFactory;

    protected $table = "OPTV2INVENTORY";
    protected $guarded = [];
    protected $connection = "mysql"; 
}
