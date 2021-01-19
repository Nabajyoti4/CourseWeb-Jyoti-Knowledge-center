<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentFormOneController extends Controller
{
    //
    public function index(){
        $students = Student::latest()->get();
        return view('admin.formone.index', compact('students'));
    }
}
