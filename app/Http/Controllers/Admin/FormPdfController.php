<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormPdf;
use Illuminate\Http\Request;

class FormPdfController extends Controller
{
    ///*
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $pdfs = FormPdf::all();
        return view('admin.pdf.index', compact('pdfs'));
    }

}
