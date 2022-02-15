@extends('layouts.app')
@section('content')
<table class="table table-bordered">
    <tr align="center">
        <td>NAME</td>
        <td>Designation</td>
    </tr>
    @foreach($teachers as $t)
    <tr>
        <td><a href="{{route('teacher.details',['id'=>encrypt($t->id)])}}">{{$t->name}}</a></td>
        <!-- <td><a href="/teacher/get/{{$t->id}}/{{$t->name}}/{{$t->dob}}">{{$t->name}}</a></td> -->
        <td>{{$t->designation}}</td>
    </tr>
    @endforeach
</table>
@endsection