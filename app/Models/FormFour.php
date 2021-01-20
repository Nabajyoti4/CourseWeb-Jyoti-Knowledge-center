<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormFour extends Model
{
    use HasFactory;
    protected $fillable = ['name',
        'image',
        'gender',
        'age',
        'father_name',
        'father_phone',
        'mother_name',
        'mother_phone',
        'emergency',
        'email',
        'from',
        'to',
        'facility'];
}
