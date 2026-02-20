<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPTv2UserExp extends Model
{
    use HasFactory;

    protected $table = "SALESITUSEREXP";
    protected $guarded = [];
    protected $connection = "mysql"; 
}
