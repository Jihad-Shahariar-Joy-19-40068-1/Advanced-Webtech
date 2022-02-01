@extends('layouts.app')
@section('content')

	<title>Login Form</title>

	<table border="1" align="center" width="45%">
		<tr height="100px">
			<th colspan="3" height="100"><h1>Login</h1></th>
		</tr>
		<tr height="35px">
			<td>Name</td>
			<td><input type="text" name="" value=""></td>
		</tr>
		<tr height="35px">
			<td>Password</td>
			<td><input type="text" name="" value=""></td>
		</tr>
		
		<tr height="35px" >
			<td colspan="3" align="right">
			<a href="registration"><input type="button" name="" value="Registration"> </a>
			<a href="login"><input type="button" name="" value="Submit"> </a>
			</td>
		</tr>
	</table>

@endsection('')