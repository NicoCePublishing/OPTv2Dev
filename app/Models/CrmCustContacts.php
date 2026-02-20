<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrmCustContacts extends Model
{
    use HasFactory;

    protected $table = "prd.CRMCUSTCONTACTS";
    protected $guarded = [];
    protected $connection = "mysql"; 
    public $timestamps = false;
}

