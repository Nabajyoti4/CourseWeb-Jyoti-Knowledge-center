<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormThree;
use App\Models\FormTwo;
use Illuminate\Http\Request;

class FormTwoController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $students = FormTwo::latest()->get();
        return view('admin.formtwo.index', compact('students'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id){
        $student = FormTwo::findOrFail($id);
        return view('admin.formtwo.show', compact('student'));
    }
}
