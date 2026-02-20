<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewSales extends Model
{
    use HasFactory;

    protected $table = "new_sales";
    protected $guarded = [];
    protected $connection = "salesdata"; 
}
