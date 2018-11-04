<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\createResumeRequest;
use App\Resume;

class ResumesController extends Controller
{
    public function index()
    {
        return view('resumes.index');
    }

    public function store(Request $request)
    {
        //Resume::create($request->all());
        //dd($request);
        $resume = new Resume();
        $resume->name = $request->name;
        $resume->surname = $request->surname;
        $resume->birthdate = $request->birthdate;
        $resume->country = $request->country;
        $resume->tel = $request->tel;
        $resume->email = $request->email;
        $resume->address = $request->address;
        $datebeginstudy = $request->datebeginstudy;
        $dateendstudy = $request->dateendstudy;
        $studyname = $request->studyname;
        $professionstudy = $request->professionstudy;
        $doctor = $request->doctor;
        $datebeginwork = $request->datebeginwork;
        $dateendwork = $request->dateendwork;
        $workname = $request->workname;
        $professionwork = $request->professionwork;
        $resume->interests = $request->interests;

//        $photo = file_get_contents($request->photo->getRealPath());
//        $type = pathinfo($photo, PATHINFO_EXTENSION);
//        $resume->photo = base64_encode($photo);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $namePhoto = time() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/resumes');
            //$imagePath = $destinationPath . "/" . $namePhoto;
            $photo->move($destinationPath, $namePhoto);
            $resume->photo = $namePhoto;
        }

        for ($i = 0; $i < count($datebeginstudy); $i++){
            $resume["datebeginstudy{$i}"] = $datebeginstudy[$i];
            $resume["dateendstudy{$i}"] = $dateendstudy[$i];
            $resume["studyname{$i}"] = $studyname[$i];
            $resume["professionstudy{$i}"] = $professionstudy[$i];
            $resume["doctor{$i}"] = $doctor[$i];
        }
        for ($j = 0; $j < count($datebeginwork); $j++){
            $resume["datebeginwork{$j}"] = $datebeginwork[$j];
            $resume["dateendwork{$j}"] = $dateendwork[$j];
            $resume["workname{$j}"] = $workname[$j];
            $resume["professionwork{$j}"] = $professionwork[$j];
        }
        $resume->save();
        return redirect()->route('getList');
    }

    public function getList()
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
