<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPTv2UpdatePushCUST extends Model
{
    use HasFactory;

    protected $table = "OPTV2UPDATEPUSHLISTCUST";
    protected $guarded = [];
    protected $connection = "mysql"; 
}
