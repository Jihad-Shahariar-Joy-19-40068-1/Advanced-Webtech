@extends('layouts.app')
@section('content')

<center>
    <h3>{{Session::get('msg')}}</h3>
    <h1>This is my Homepage</h1>
</center>
@endsection