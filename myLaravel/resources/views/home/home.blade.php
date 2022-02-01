@extends('layouts.task1Layout')
@section('task1')



@foreach ($courses as $course)
        <div>
            <h2>Course Name : {{ $course->name }}</h2>
            <h2>Course Instructor : {{ $course->instructor }}</h2>
            <h2>Course Duration : {{ $course->duration }}</h2>
        </div>
@endforeach


@endsection('')