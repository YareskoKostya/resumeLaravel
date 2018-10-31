@extends('layout')

@section('content')

    <h2>List of resumes</h2>
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
            <tr id="pointer">
                <td  scope="row">
                    <a href="{{ route('show', $resume->id) }}">
                    {{ $resume->id }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('show', $resume->id) }}">
                    {{ $resume->name . ' ' . $resume->surname }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('show', $resume->id) }}">
                    {{ $resume->email }}
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
