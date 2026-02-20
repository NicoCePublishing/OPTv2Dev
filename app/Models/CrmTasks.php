<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrmTasks extends Model
{
    use HasFactory;

    protected $table = "prd.CRMTASKS";
    protected $guarded = [];
    protected $connection = "mysql"; 
    public $timestamps = false;
}
