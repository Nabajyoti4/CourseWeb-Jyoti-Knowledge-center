<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    //
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $courses = Course::all();
        return view('admin.course.index', compact('courses'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(){
        return view('admin.course.create');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){
        $data = $request->only(['title', 'description', 'price', 'image', 'form', 'form_no']);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('course', 'public');
        }
        if ($request->hasFile('form')) {
            $data['form'] = $request->file('form')->store('pdf', 'public');
        }

        Course::create($data);

        return redirect()->route('admin.courses.index')
            ->with('success', 'New course created');

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id){
        $course = Course::findOrFail($id);
        return view('admin.course.edit', compact('course'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id){
        $data = $request->only(['title', 'description', 'price', 'image', 'form', 'form_no']);
        $course = Course::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($course->image);
            $data['image'] = $request->file('image')->store('course', 'public');
        }

        if ($request->hasFile('form')) {
            Storage::disk('public')->delete($course->form);
            $data['form'] = $request->file('form')->store('pdf', 'public');
        }

        $course->update($data);

        return redirect()->route('admin.courses.index')
            ->with('success', 'Course Updated');

    }
}
