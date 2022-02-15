@extends('layouts.app')
@section('content')
	<title>Registration Page</title>

	<form method="post" action="{{route('registration.submit')}}">
		{{@csrf_field()}}
		<fieldset>
			<legend><b>Registration</b></legend>
			<table align="center">
				<tr>
					<td>Username: </td>
					<td><input type="text" placeholder="username" name="uname" value="{{old('uname')}}"></td>
					<td>
						@error('uname')
						<span>{{$message}}</span>
						@enderror
					</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" placeholder="password" name="password" value=""></td>
					<td>
						@error('password')
						<span>{{$message}}</span>
						@enderror
					</td>
				</tr>
				<tr>
					<td>Confirm Password:</td>
					<td><input type="password" placeholder="confirm password" name="conf_password" value=""></td>
					<td>
						@error('conf_password')
						<span>{{$message}}</span>
						@enderror
					</td>
				</tr>
				<tr>
					<td>ID:</td>
					<td><input type="id" placeholder="ID" name="id" value="{{old('id')}}"></td>
					<td>
						@error('id')
						<span>{{$message}}</span>
						@enderror
					</td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" placeholder="email" name="email" value="{{old('email')}}"></td>
					<td>
						@error('email')
						<span>{{$message}}</span>
						@enderror
					</td>
				</tr>
				<tr>
					<td>DOB:</td>
					<td><input type="date" name="dob" value="{{old('dob')}}"></td>
					<td>
						@error('date')
						<span>{{$message}}</span>
						@enderror
					</td>
				</tr>
				<tr>
					<td colspan = 2 align="center"><br>
						<!-- <input type="submit" name="submit" value="Submit"> -->
						<a href="{{route('registration')}}"><input type="button" name="" value="Reset"></a>
         		        <input type="submit">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
@endsection