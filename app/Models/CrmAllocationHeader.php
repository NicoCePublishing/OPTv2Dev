<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrmAllocationHeader extends Model
{
    use HasFactory;

    protected $table = "prd.AllocationHeader";
    protected $guarded = [];
    protected $connection = "mysql"; 
    public $timestamps = false;
}
