<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immunation extends Model
{
    use HasFactory;

    protected $fillable = ['bcg', 'dpt', 'polio', 'measles',
        'mmr',
        'dt',
        'hbv',
        'hib',
        'chicken',
        'typhoid',
        'hepatitis'];
}
