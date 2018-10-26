@extends('layout')

@section('content')

    <div class="container contact-form">
        <h2 align="center">Fill in resume</h2>
        {!! Form::open(['route' => ['store'], 'files' => 'true']) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group" align="center">
                    <h4>Your Photo</h4>
                    <img src="https://profile.actionsprout.com/default.jpeg" id='img-upload'/>
                    <br/>
                    <input type="file" name="photo" id="imgInp" hidden>
                    <div class="form-group">
                        <input type="button" name="btnSubmit" class="btnContact" onclick="addPhoto()" value="Add Photo"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="text-input" class="col-4 col-form-label">Your First Name:</label>
                    <div class="col-8">
                        <input class="form-control" type="text" name="name" id="text-input" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text-input" class="col-4 col-form-label">Your Last Name:</label>
                    <div class="col-8">
                        <input class="form-control" type="text" name="surname" id="text-input" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date-input" class="col-md-4 col-form-label">Your Birthdate:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="date" name="birthdate" id="date-input" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text-input" class="col-md-4 col-form-label">Your Country:</label>
                    <div class="col-md-8">
                        <select class="custom-select" name="country" id="text-input" required>
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
                        <input class="form-control" type="tel" name="tel" id="text-input" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text-input" class="col-4 col-form-label">Your Email:</label>
                    <div class="col-8">
                        <input class="form-control" type="email" name="email" id="text-input" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text-input" class="col-4 col-form-label">Your Address:</label>
                    <div class="col-8">
                        <input class="form-control" type="text" name="address" id="text-input" required>
                    </div>
                </div>
                <div class="form-group" id="div" align="center">
                    <h5><label class="col-12 col-form-label">Education:</label></h5>
                </div>
                @include('resumes.study')
                <div class="form-group"  id="study" align="center">
                    <input type="button" name="btnSubmit" class="btnContact" onclick="addStudy()" value="Add More"/>
                </div>
                <div class="form-group" id="div" align="center">
                    <h5><label class="col-12 col-form-label">Work:</label></h5>
                </div>
                @include('resumes.work')
                <div class="form-group" id="work" align="center">
                    <input type="button" name="btnSubmit" class="btnContact" onclick="addWork()" value="Add More"/>
                </div>
                <div class="form-group row" id="int">
                    <label for="text-input" class="col-4 col-form-label">Your Interests:</label>
                    <div class="col-8">
                        <input class="form-control" type="text" name="interests" id="text-input" required>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="form-group" align="center">
            <input type="submit" name="btnSubmit" class="btnContact"  onclick="check()" value="Submit"/>
        </div>
        {!! Form::close() !!}
    </div>

@endsection
