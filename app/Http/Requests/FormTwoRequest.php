<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormTwoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'dob'=>'required',
            'gender'=>'required',
            'nationality'=>'required',
            'spoken_language'=>'required',
            'address'=>'required',
            'school'=>'required',
            'class'=>'required',
            'father_name'=>'required',
            'father_occupation'=>'required',
            'father_contact_no'=>'required',
            'father_whatsapp_no'=>'required',
            'father_email'=>'required',
            'mother_name'=>'required',
            'mother_occupation'=>'required',
            'mother_contact_no'=>'required',
            'mother_whatsapp_no'=>'required',
        ];
    }
}
