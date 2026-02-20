<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPTv2UpdatePushISBN extends Model
{
    use HasFactory;

    protected $table = "OPTV2UPDATEPUSHLISTISBN";
    protected $guarded = [];
    protected $connection = "mysql"; 
}
