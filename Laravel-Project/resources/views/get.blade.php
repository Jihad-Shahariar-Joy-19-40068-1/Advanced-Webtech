@extends('master')
@section("content")

<center><br>
<table class="table table-bordered table">
            <tr>
				<td colspan=2><h2> USER DETAILS </h2></td>
			</tr>
			<tr>
				<td>ID : </td>
				<td>{{$user->id}}</td>
			</tr>
            <tr>
				<td>NAME : </td>
				<td>{{$user->name}}</td>
			</tr>
            <tr>
				<td>EMAIL : </td>
				<td>{{$user->email}}</td>
			</tr>
            <tr>
				<td>DOB : </td>
				<td>{{$user->dob}}</td>
			</tr>
		</table>
<center
@endsection