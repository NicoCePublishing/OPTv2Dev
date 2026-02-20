<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrmMotherAct extends Model
{
    use HasFactory;

    protected $table = "prd.CRMMOTHERACT";
    protected $guarded = [];
    protected $connection = "mysql"; 
    public $timestamps = false;
}
