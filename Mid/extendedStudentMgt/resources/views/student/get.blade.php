@extends('layouts.app')
@section('content')
<center>
<h1>Student Info</h1>
<h3>NAME: {{$student->uname}}</h3>
<h3>ID: {{$student->id}}</h3>
<h3>USER ID: {{$student->user_id}}</h3>
<h3>EMAIL: {{$student->email}}</h3>
<h3>DOB: {{$student->dob}}</h3>
<h3>CGPA: {{$student->cgpa}}</h3>
<h3>DEPT: {{$student->department->name}}</h3>


<h2>The sum is: {{$sum}}<h2>

<h3>Course Details</h3>
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Department Name</th>
    </tr>
    @foreach($student->courses as $c)
    <tr>
        <td>{{$c->course->name}}</td>
        <td>{{$c->course->department->name}}</td>
    </tr>
    @endforeach
</table>
</center>
@endsection