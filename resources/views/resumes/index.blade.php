@extends('layout')

@section('content')

    @if($errors->any())
        <div class="container">
            <div class="col-8">
                <div class="alert alert-danger" align="left">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    <h2>Fill in resume</h2>
    {!! Form::open(['route' => ['store'], 'files' => true]) !!}
    <div class="row">
        <div class="col-6">
            <div class="form-group" align="center">
                <h4>Your Photo</h4>
                <img src="https://profile.actionsprout.com/default.jpeg" id='img-upload'/>
                <br/>
                {{Form::file('photo', ['hidden', 'id' => 'imgInp'])}}
                <div class="form-group">
                    <input type="button" name="btnSubmit" class="btnContact" onclick="addPhoto()" value="Add Photo"/>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group row">
                <label for="text-input" class="col-4 col-form-label">Your First Name:</label>
                <div class="col-8">
                    <input class="form-control" type="text" name="name" id="text-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="text-input" class="col-4 col-form-label">Your Last Name:</label>
                <div class="col-8">
                    <input class="form-control" type="text" name="surname" id="text-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="date-input" class="col-4 col-form-label">Your Birthdate:</label>
                <div class="col-8">
                    <input class="form-control" type="date" name="birthdate" id="date-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="text-input" class="col-4 col-form-label">Your Country:</label>
                <div class="col-8">
                    <select class="custom-select" name="country" id="text-input">
                        <option selected></option>
                        <option>Ukraine</option>
                        <option>Belarus</option>
                        <option>Moldova</option>
                        <option>Poland</option>
                        <option>Slovakia</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="text-input" class="col-4 col-form-label">Your Telephone:</label>
                <div class="col-8">
                    <input class="form-control" type="tel" name="tel" id="text-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="text-input" class="col-4 col-form-label">Your Email:</label>
                <div class="col-8">
                    <input class="form-control" type="email" name="email" id="text-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="text-input" class="col-4 col-form-label">Your Address:</label>
                <div class="col-8">
                    <input class="form-control" type="text" name="address" id="text-input">
                </div>
            </div>
            <div class="form-group" align="center">
                <label class="col-12 col-form-label">Education:</label>
            </div>
            @include('resumes.study')
            <div class="form-group button"  id="study" align="center">
                <input type="button" name="btnSubmit" class="btnContact" value="Add More"
                       onclick="addStudy('{{ str_replace(array("\r","\n"), "", file_get_contents('..\resources\views\resumes\study.blade.php')) }}')"/>
            </div>
            <div class="form-group" align="center">
                <label class="col-12 col-form-label">Work:</label>
            </div>
            @include('resumes.work')
            <div class="form-group button" id="work" align="center">
                <input type="button" name="btnSubmit" class="btnContact" value="Add More"
                       onclick="addWork('{{ str_replace(array("\r","\n"), "", file_get_contents('..\resources\views\resumes\work.blade.php')) }}')"/>
            </div>
            <div class="form-group row">
                <label for="text-input" class="col-4 col-form-label">Your Interests:</label>
                <div class="col-8">
                    <input class="form-control" type="text" name="interests" id="text-input">
                </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="form-group" align="center">
        {{Form::submit('Submit', ['class' => 'btnContact'])}}
    </div>
    {!! Form::close() !!}

@endsection