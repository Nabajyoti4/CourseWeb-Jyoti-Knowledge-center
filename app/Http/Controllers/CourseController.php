<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id){
        $course = Course::findOrFail($id);
        $courses = Course::all();
        return view('course', compact('course', 'courses'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function query_store(Request $request){
        $data = $request->only(['name', 'email', 'subject', 'message']);
        Contact::create($data);
        return redirect()->back()->with('success', 'Query Submitted');
    }
}
