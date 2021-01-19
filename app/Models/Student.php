<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'medical_id',
        'immunation_id',
        'admission_sought',
        'batch',
        'dob',
        'image',
        'name',
        'father_name',
        'father_phone',
        'father_profession',
        'father_company',
        'father_qualification',
        'mother_name',
        'mother_phone',
        'mother_profession',
        'mother_company',
        'mother_qualification',
        'address',
        'email',
        'phone',
        'schooling',
        'specify',
        'toilet',
        'siblings',
        'strength',
        'development',
        'activities'
        ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function medical(){
        return $this->hasOne(Medical::class, 'id', 'medical_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function immunation(){
        return $this->hasOne(Immunation::class, 'id', 'immunation_id');
    }
}
