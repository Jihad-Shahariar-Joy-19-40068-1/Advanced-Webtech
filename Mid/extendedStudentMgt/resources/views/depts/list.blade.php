@extends('layouts.app')
@section('content')

<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>ID</th>
    </tr>
    @foreach($depts as $d)
    <tr>
        <td><a href="{{route('department.details',['id'=>encrypt($d->id)])}}">{{$d->name}}</a></td>
        <th>{{$d->id}}</th>
    </tr>
    @endforeach
</table>

@endsection