<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPdf extends Model
{
    use HasFactory;

    protected $fillable = ['form_one', 'form_two', 'form_three', 'form_four'];
}
