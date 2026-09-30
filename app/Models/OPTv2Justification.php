<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPTv2Justification extends Model
{
    use HasFactory;

    protected $table = 'OPTV2JUSTIFICATION';

    protected $connection = 'mysql';

    protected $guarded = [];

    public $timestamps = false;
}