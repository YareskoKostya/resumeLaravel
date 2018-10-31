@extends('layout')

@section('content')

    <h2>User's resume</h2>
    <div class="row" id="res">
        <div class="col-md-6">
            <div class="form-group" align="center">
                <h4>Photo</h4>
                <img width="350px" src="data:image/jpeg;base64,{{ base64_encode($resume->photo) }}"/>
            </div>
        </div>
        <div class="col-md-6">
            <table  class="table">
                <tr>
                    <td class="font-italic" id="black">First Name:</td>
                    <td class="font-weight-bold" id="black">{{ $resume->name }}</td>
                </tr>
                <tr>
                    <td class="font-italic" id="black">Last Name:</td>
                    <td class="font-weight-bold" id="black">{{ $resume->surname }}</td>
                </tr>
                <tr>
                    <td class="font-italic" id="black">Birthdate:</td>
                    <td class="font-weight-bold" id="black">{{ $resume->birthdate }}</td>
                </tr>
                <tr>
                    <td class="font-italic" id="black">Country:</td>
                    <td class="font-weight-bold" id="black">{{ $resume->country }}</td>
                </tr>
                <tr>
                    <td class="font-italic" id="black">Telephone:</td>
                    <td class="font-weight-bold" id="black">{{ $resume->tel }}</td>
                </tr>
                <tr>
                    <td class="font-italic" id="black">Email:</td>
                    <td class="font-weight-bold" id="black">{{ $resume->email }}</td>
                </tr>
                <tr>
                    <td class="font-italic" id="black">Address:</td>
                    <td class="font-weight-bold" id="black">{{ $resume->address }}</td>
                </tr>
                <tr>
                    <td colspan="2" id="blue" align="center">Education:</td>
                </tr>
                @for ($i = 0; $i < 3; $i++)
                <tr @if ($resume->datebeginstudy{$i} == NULL) hidden="" @endif>
                    <td class="font-italic" id="black">Start Date:</td>
                    <td class="font-weight-bold" id="black">{{ $resume->datebeginstudy{$i} }}</td>
                </tr>
                <tr @if ($resume->dateendstudy{$i} == NULL) hidden="" @endif>
                    <td class="font-italic" id="black">End Date:</td>
                    <td class="font-weight-bold" id="black">{{ $resume->dateendstudy{$i} }}</td>
                </tr>
                <tr @if ($resume->studyname{$i} == NULL) hidden="" @endif>
                    <td class="font-italic" id="black">Institution Name:</td>
                    <td class="font-weight-bold" id="black">{{ $resume->studyname{$i} }}</td>
                </tr>
                <tr @if ($resume->professionstudy{$i} == NULL) hidden="" @endif>
                    <td class="font-italic" id="black">Specialty:</td>
                    <td class="font-weight-bold" id="black">{{ $resume->professionstudy{$i} }}</td>
                </tr>
                <tr @if ($resume->doctor{$i} == NULL) hidden="" @endif>
                    <td class="font-italic" id="black">Academic Degree:</td>
                    <td class="font-weight-bold" id="black">{{ $resume->doctor{$i} }}</td>
                </tr>
                <tr>
                    <td colspan="2" align="center"></td>
                </tr>
                @endfor
                <tr>
                    <td colspan="2" id="blue" align="center">Work:</td>
                </tr>
                @for ($j = 0; $j < 3; $j++)
                <tr @if ($resume->datebeginwork{$j} == NULL) hidden="" @endif>
                    <td class="font-italic" id="black">Start Work:</td>
                    <td class="font-weight-bold" id="black">{{ $resume->datebeginwork{$i} }}</td>
                </tr>
                <tr @if ($resume->dateendwork{$j} == NULL) hidden="" @endif>
                    <td class="font-italic" id="black">End Work:</td>
                    <td class="font-weight-bold" id="black">{{ $resume->dateendwork{$i} }}</td>
                </tr>
                <tr @if ($resume->dateendwork{$j} == NULL) hidden="" @endif>
                    <td class="font-italic" id="black">Company Name:</td>
                    <td class="font-weight-bold" id="black">{{ $resume->workname{$i} }}</td>
                </tr>
                <tr @if ($resume->professionwork{$j} == NULL) hidden="" @endif>
                    <td class="font-italic" id="black">Specialty:</td>
                    <td class="font-weight-bold" id="black">{{ $resume->professionwork{$i} }}</td>
                </tr>
                <tr>
                    <td colspan="2" align="center"></td>
                </tr>
                @endfor
                <tr>
                    <td class="font-italic" id="black">Interests:</td>
                    <td class="font-weight-bold" id="black">value="{{ $resume->interests }}"</td>
                </tr>
            </table>
        </div>
    </div>

@endsection
