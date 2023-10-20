<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currencies extends Model
{
    use HasFactory;

    protected $table = "currencies";
    protected $primarykey = "id";
    protected $fillable = [
        'currency_name',
        'currency_code',
        'symbol',
        'active'
    ];
}
