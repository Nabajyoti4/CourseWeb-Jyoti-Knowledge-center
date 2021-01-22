<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormThreeRequest;
use App\Models\Course;
use App\Models\FormThree;

class FormThreeController extends Controller
{

    public function index($course){
        $courses = Course::all();
        return view('forms.formThree.index', compact('course', 'courses'));
    }

    /**
     * @param FormThreeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FormThreeRequest $request)
    {
        $data = $request->only([
            'name', 'dob', 'gender', 'nationality',  'course','spoken_language',
            'address', 'school', 'class',
            'father_name', 'father_occupation', 'father_contact_no', 'father_whatsapp_no', 'father_email',
            'mother_name', 'mother_occupation', 'mother_contact_no', 'mother_whatsapp_no', 'subjects', 'image'
        ]);

        $data['subjects'] = implode(', ',$data['subjects']);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('Formthree','public');
        }

        FormThree::create($data);

        return redirect()->back()->with('success', 'Data Submitted');
    }
}
