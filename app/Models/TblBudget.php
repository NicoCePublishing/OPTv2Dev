<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblBudget extends Model
{
    use HasFactory;

    protected $table = "tbl_budget";
    protected $guarded = [];
    protected $connection = "budgeting"; 
}
