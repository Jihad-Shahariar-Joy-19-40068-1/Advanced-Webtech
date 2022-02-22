@extends('layouts.app')
@section('content')
<table class="table table-bordered">
    <tr align="center">
        <td>NAME</td>
        <td>USER ID</td>
        <td>EMAIL</td>
        <td>DOB</td>
        <td>CGPA</td>
    </tr>
    @foreach($students as $s)
    <tr>
        <td><a href="{{route('student.details',['id'=>encrypt($s->id)])}}">{{$s->uname}}</a></td>
        <!-- <td><a href="/student/get/{{$s->id}}/{{$s->name}}/{{$s->dob}}">{{$s->name}}</a></td> -->
        <td>{{$s->user_id}}</td>
        <td>{{$s->email}}</td>
        <td>{{$s->dob}}</td>
        <td>{{$s->cgpa}}</td>
    </tr>
    @endforeach
</table>
@endsection