<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrmMotherLookup extends Model
{
    use HasFactory;

    protected $table = "prd.CRMMOTHERLOOKUP";
    protected $guarded = [];
    protected $connection = "mysql"; 
}
