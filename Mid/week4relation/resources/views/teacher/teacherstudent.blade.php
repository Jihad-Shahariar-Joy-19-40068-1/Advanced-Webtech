@extends('layouts.app')
@section('content')

<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>ID</th>
    </tr>
    @foreach($st as $students)
    <tr>
        <td>{{$students->name}}</a></td>
        <th>{{$students->id}}</th>
    </tr>
    @endforeach
</table>

@endsection