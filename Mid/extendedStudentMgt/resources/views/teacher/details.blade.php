@extends('layouts.app')
@section('content')
<center>
<h1>Teacher Info</h1>
<h3>NAME: {{$t->name}}</h3>
<h3>ID: {{$t->id}}</h3>


<h3>Course Details</h3>
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Department Name</th>
    </tr>
    @foreach($t->taught_courses as $c)
    <tr>
        <td><a href="{{route('teacherstudent.details',['id'=>encrypt($c->id)])}}">{{$c->course->name}}</a></td>
        <td>{{$c->course->department->name}}</td>

    </tr>
    @endforeach
</table>
</center>
@endsection