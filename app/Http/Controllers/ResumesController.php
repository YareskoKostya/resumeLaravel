<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;

class ResumesController extends Controller
{
    public function index()
    {
        return view('resumes.index');
    }

    public function store(Request $request)
    {
        Task::create($request->all());
        return redirect()->route('list');
    }
}
