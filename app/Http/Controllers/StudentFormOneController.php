<?php

namespace App\Http\Controllers;

use App\Models\Immunation;
use App\Models\Medical;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentFormOneController extends Controller
{
    //

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($course){
        return view('forms.formOne.index', compact('course'));
    }

    /**
     * @param Request $request
     */
    public function store(Request $request){
        $student_data = $request->only(['admission_sought', 'course',
            'batch', 'dob', 'image', 'name', 'father_name', 'father_phone', 'father_profession', 'father_company',
            'father_qualification', 'mother_name', 'mother_phone', 'mother_profession', 'mother_company',
            'mother_qualification', 'address', 'email', 'phone', 'schooling', 'specify', 'toilet',
            'siblings', 'strength', 'development', 'activities']);

        $medical_data = $request->only(['diseases', 'operation', 'allergy', 'medication',
        'phobia', 'instructions', 'height', 'weight']);

        $immunation_data = $request->only(['bcg', 'dpt', 'polio', 'measles', 'mmr', 'dt', 'hbv', 'hib', 'chicken',
            'typhoid', 'hepatitis']);

        $student_data['admission_sought'] = implode(',', $student_data['admission_sought']);


        if ($request->hasFile('image')) {
            $student_data['image'] = $request->file('image')->store('Formone','public');
        }

        $immunation_id = Immunation::create($immunation_data);
        $medical_id = Medical::create($medical_data);
        $student_data['immunation_id'] = $immunation_id->id;
        $student_data['medical_id'] = $medical_id->id;

        Student::create($student_data);

        return redirect()->back()->with('success', 'Form Submitted');

    }

}
