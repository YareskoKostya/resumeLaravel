@extends('layout')

@section('content')

    <h2>Resume</h2>
    <div class="row show">
        <div class="col-6">
            <div class="form-group" align="center">
                <h4>Photo</h4>
                <img width="350px" src="{{ asset('uploads/resumes/' . $resume->photo) }}"/>
            </div>
        </div>
        <div class="col-6">
            <table class="table">
                <tr>
                    <td class="font-italic">First Name:</td>
                    <td class="font-weight-bold">{{ $resume->name }}</td>
                </tr>
                <tr>
                    <td class="font-italic">Last Name:</td>
                    <td class="font-weight-bold">{{ $resume->surname }}</td>
                </tr>
                <tr>
                    <td class="font-italic">Birthdate:</td>
                    <td class="font-weight-bold">{{ $resume->birthdate }}</td>
                </tr>
                <tr>
                    <td class="font-italic">Country:</td>
                    <td class="font-weight-bold">{{ $resume->country }}</td>
                </tr>
                <tr>
                    <td class="font-italic">Telephone:</td>
                    <td class="font-weight-bold">{{ $resume->tel }}</td>
                </tr>
                <tr>
                    <td class="font-italic">Email:</td>
                    <td class="font-weight-bold">{{ $resume->email }}</td>
                </tr>
                <tr>
                    <td class="font-italic">Address:</td>
                    <td class="font-weight-bold">{{ $resume->address }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="col-12" align="center">Education:</td>
                </tr>
                @for($i = 0; $i < 3; $i++)
                    @if ($resume["datebeginstudy{$i}"] != NULL)
                        <tr>
                            <td class="font-italic">Start Date:</td>
                            <td class="font-weight-bold">{{ $resume["datebeginstudy{$i}"] }}</td>
                        </tr>
                        <tr>
                            <td class="font-italic">End Date:</td>
                            <td class="font-weight-bold">{{ $resume["dateendstudy{$i}"] }}</td>
                        </tr>
                        <tr>
                            <td class="font-italic">Institution Name:</td>
                            <td class="font-weight-bold">{{ $resume["studyname{$i}"] }}</td>
                        </tr>
                        <tr>
                            <td class="font-italic">Specialty:</td>
                            <td class="font-weight-bold">{{ $resume["professionstudy{$i}"] }}</td>
                        </tr>
                        <tr>
                            <td class="font-italic">Academic Degree:</td>
                            <td class="font-weight-bold">{{ $resume["doctor{$i}"] }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"></td>
                        </tr>
                    @endif
                @endfor
                <tr>
                    <td colspan="2" class="col-12" align="center">Work:</td>
                </tr>
                @for ($j = 0; $j < 3; $j++)
                    @if ($resume["datebeginwork{$j}"] != NULL)
                        <tr>
                            <td class="font-italic">Start Work:</td>
                            <td class="font-weight-bold">{{ $resume["datebeginwork{$j}"] }}</td>
                        </tr>
                        <tr>
                            <td class="font-italic">End Work:</td>
                            <td class="font-weight-bold">{{ $resume["dateendwork{$j}"] }}</td>
                        </tr>
                        <tr>
                            <td class="font-italic">Company Name:</td>
                            <td class="font-weight-bold">{{ $resume["workname{$j}"] }}</td>
                        </tr>
                        <tr>
                            <td class="font-italic">Specialty:</td>
                            <td class="font-weight-bold">{{ $resume["professionwork{$j}"] }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"></td>
                        </tr>
                    @endif
                @endfor
                <tr>
                    <td class="font-italic">Interests:</td>
                    <td class="font-weight-bold">{{ $resume->interests }}</td>
                </tr>
            </table>
        </div>
    </div>

@endsection