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
        //dd($request->photo->getRealPath());
        $name = $request->name;
        $surname = $request->surname;
        $birthdate = $request->birthdate;
        $country = $request->country;
        $tel = $request->tel;
        $email = $request->email;
        $address = $request->address;
        $datebeginstudy = $request->datebeginstudy;
        $dateendstudy = $request->dateendstudy;
        $studyname = $request->studyname;
        $professionstudy = $request->professionstudy;
        $doctor = $request->doctor;
        $datebeginwork = $request->datebeginwork;
        $dateendwork = $request->dateendwork;
        $workname = $request->workname;
        $professionwork = $request->professionwork;
        $interests = $request->interests;
        $photo = file_get_contents($request->photo->getRealPath());
        $type = pathinfo($photo, PATHINFO_EXTENSION);
        $photoBase64 = base64_encode($photo);

//        if ($request->hasFile('photo')) {
//            $photo = $request->file('photo');
//            $namePhoto = time() . '.' . $photo->getClientOriginalExtension();
//            $destinationPath = public_path('/uploads/resumes');
//            //$imagePath = $destinationPath . "/" . $namePhoto;
//            $photo->move($destinationPath, $namePhoto);
//        }
        $arrStudy = [];
        for ($i = 0; $i < count($datebeginstudy); $i++){
            $arrStudy += [
                "datebeginstudy{$i}" => $datebeginstudy[$i],
                "dateendstudy{$i}" => $dateendstudy[$i],
                "studyname{$i}" => $studyname[$i],
                "professionstudy{$i}" => $professionstudy[$i],
                "doctor{$i}" => $doctor[$i]
                ];
        }
        $arrWork = [];
        for ($j = 0; $j < count($datebeginwork); $j++){
            $arrWork += [
                "datebeginwork{$j}" => $datebeginwork[$j],
                "dateendwork{$j}" => $dateendwork[$j],
                "workname{$j}" => $workname[$j],
                "professionwork{$j}" => $professionwork[$j]
            ];
        }
        $resume = new Resume([
        'name' => $name,
        'surname' => $surname,
        'birthdate' => $birthdate,
        'country' => $country,
        'tel' => $tel,
        'email' => $email,
        'address' => $address] +
            $arrStudy +
            $arrWork +
            [
        'interests' => $interests,
        'photo' => $photoBase64
        ]);
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
