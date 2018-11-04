@extends('layout')

@section('content')

    <h2>List of resumes</h2>
    <div class="col-10">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name, surname</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($resumes as $resume)
                <tr onclick="window.location.href = 'http://resumelaravel/show/' + {{ $resume->id }}">
                    <td  scope="row">{{ $resume->id }}</td>
                    <td>{{ $resume->name . ' ' . $resume->surname }}</td>
                    <td>{{ $resume->email }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection