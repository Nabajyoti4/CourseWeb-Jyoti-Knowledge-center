<?php

namespace App\Http\Controllers;

use App\Models\FormFour;
use Illuminate\Http\Request;

class FormFourController extends Controller
{
    //


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){
        $data = $request->only(['name',
        'image', 'gender', 'age',
        'father_name', 'father_phone', 'mother_name', 'mother_phone',
        'emergency', 'email', 'from', 'to', 'facility']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('Formfour');
        }

        FormFour::create($data);

        return redirect()->back();

    }
}
