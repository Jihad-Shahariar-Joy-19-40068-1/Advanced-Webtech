@extends('master')
@section("content")
<center>

<!-- incomplete -->

<table class="table table-bordered">
            <tr>
				<td colspan=2> USER DETAILS </td>
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



</center>
@endsection