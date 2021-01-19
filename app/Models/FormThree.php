<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormThree extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','dob','gender','nationality','spoken_language',
        'address','school','class',
        'father_name','father_occupation','father_contact_no','father_whatsapp_no','father_email',
        'mother_name','mother_occupation','mother_contact_no','mother_whatsapp_no',
        'subjects','image'
    ];
}
