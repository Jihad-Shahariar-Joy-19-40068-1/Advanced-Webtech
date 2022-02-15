@extends('layouts.app')
@section('content')

<div>
    @if(count($d->students)>0)
    <h2 class="label label-secondary">{{$d->name}}</h2>
</div>
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>ID</th>
        <th>Email</th>
        <th>DOB</th>
        <th>CGPA</th>

    </tr>
    @foreach($d->students as $s)
    <tr>
        <th>{{$s->uname}}</th>
        <th>{{$s->user_id}}</th>
        <th>{{$s->email}}</th>
        <th>{{$s->dob}}</th>
        <th>{{$s->cgpa}}</th>
    </tr>
    @endforeach
</table>
@else
    <span class="label label-info"><h3>No Student Found</h3></span>
@endif

@if(count($d->courses)>0)
    <h2 class="label label-secondary">{{$d->name}}</h2>
</div>
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>ID</th>

    </tr>
    @foreach($d->courses as $dept)
    <tr>
        <th>{{$dept->name}}</th>
        <th>{{$dept->id}}</th>
       
    </tr>
    @endforeach
</table>
@else
    <span class="label label-info"><h3>No Course Found</h3></span>
@endif
@endsection