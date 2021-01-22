<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormTwoRequest;
use App\Models\Course;
use App\Models\FormTwo;

class FormTwoController extends Controller
{

    /**
     * @param $course
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($course){
        $courses = Course::all();
        return view('forms.formTwo.index', compact('course', 'courses'));
    }
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FormTwoRequest $request)
    {
        $data = $request->only([
            'name', 'dob', 'gender', 'nationality', 'course', 'spoken_language',
            'address', 'school', 'class',
            'father_name', 'father_occupation', 'father_contact_no', 'father_whatsapp_no', 'father_email',
            'mother_name', 'mother_occupation', 'mother_contact_no', 'mother_whatsapp_no',
        ]);

        FormTwo::create($data);

        return redirect()->back()->with('success', 'Data Submitted');
    }
}
