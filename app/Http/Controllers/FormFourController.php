<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\FormFour;
use Illuminate\Http\Request;

class FormFourController extends Controller
{
    //

    /**
     * @param $course
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($course){
        $courses = Course::all();
        return view('forms.formFour.index', compact('course','courses'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){
        $data = $request->only(['name',
        'image', 'gender', 'age', 'course',
        'father_name', 'father_phone', 'mother_name', 'mother_phone',
        'emergency', 'email', 'from', 'to', 'facility']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image', )->store('Formfour', 'public');
        }

        FormFour::create($data);

        return redirect()->back()->with('success', 'Form Submitted');

    }
}
