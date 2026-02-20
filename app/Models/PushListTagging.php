<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PushListTagging extends Model
{
    use HasFactory;

    protected $table = "prd.PushListTagging";
    protected $guarded = [];
    protected $connection = "mysql"; 
    public $timestamps = false;
}
