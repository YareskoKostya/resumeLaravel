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
        Resume::create($request->all());
        return redirect()->route('list');
    }

    public function list()
    {
        $resumes = Resume::all();
        return view('resumes.list', ['resumes' => $resumes]);
    }

    public function show($id)
    {
        $myResume = Resume::find($id);
        return view('resumes.show', ['resume' => $myResume]);
    }
}
