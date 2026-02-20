<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrmMotherActDept extends Model
{
    use HasFactory;

    protected $table = "prd.CRMMOTHERACTDEPT";
    protected $guarded = [];
    protected $connection = "mysql"; 
}
