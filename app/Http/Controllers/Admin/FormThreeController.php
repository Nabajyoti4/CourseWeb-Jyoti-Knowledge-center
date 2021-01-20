<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormThree;
use Illuminate\Http\Request;

class FormThreeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $students = FormThree::latest()->get();
        return view('admin.formthree.index', compact('students'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id){
        $student = FormThree::findOrFail($id);
        return view('admin.formthree.show', compact('student'));
    }
}
