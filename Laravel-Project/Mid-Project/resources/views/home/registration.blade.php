@extends('layouts.app')
@section('content')
	<title>Registration Page</title>
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
        <fieldset>
	<form method="post" action="{{route('registration.submit')}}">
		{{@csrf_field()}}
		<fieldset>
			<legend><b style="color: black">Sign-up</b></legend>
			<table align="center">
				<tr>
					<td style="color: white" width= "150px"><b>Username: </b></td>
					<td><input type="text" placeholder="username" name="uname" value="{{old('uname')}}"></td>
					<td>
						@error('uname')
						<span style="color: red">{{$message}}</span>
						@enderror
					</td>
				</tr>
				<tr>
					<td colspan=3><br></td>
				</tr>
				<tr>
					<td style="color: white"><b>Password:</b></td>
					<td><input type="password" placeholder="password" name="password" value=""></td>
					<td>
						@error('password')
						<span style="color: red">{{$message}}</span>
						@enderror
					</td>
				</tr>
				<tr>
					<td colspan=3><br></td>
				</tr>
				<tr>
					<td style="color: white"><b>Confirm Password:</b></td>
					<td><input type="password" placeholder="confirm password" name="conf_password" value=""></td>
					<td>
						@error('conf_password')
						<span style="color: red">{{$message}}</span>
						@enderror
					</td>
				</tr>
				<tr>
					<td colspan=3><br></td>
				</tr>
				
				<tr>
					<td style="color: white"><b>Email:</b></td>
					<td><input type="email" placeholder="email" name="email" value="{{old('email')}}"></td>
					<td>
						@error('email')
						<span style="color: red">{{$message}}</span>
						@enderror
					</td>
				</tr>
				<tr>
					<td colspan=3><br></td>
				</tr>
				<tr>
					<td style="color: white"><b>DOB:</b></td>
					<td><input type="date" name="dob" value="{{old('dob')}}"></td>
					<td>
						@error('dob')
						<span style="color: red">{{$message}}</span>
						@enderror
					</td>
				</tr>
				
				<tr>
					<td colspan = 3 align="center"><br>
						<!-- <input type="submit" name="submit" value="Submit"> -->
						<a class="btn btn-primary" href="{{route('registration')}}">Reset</a>
         		        <input type="submit" class="btn btn-success">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
		</div>
    </div>
</div>
@endsection