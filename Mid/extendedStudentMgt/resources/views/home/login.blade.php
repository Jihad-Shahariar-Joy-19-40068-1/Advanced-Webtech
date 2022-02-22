@extends('layouts.app')
@section('content')
	<title> Login Page</title>

	<fieldset>
    <legend><b>LOGIN</b></legend>
    <form action="{{route('login.submit')}}" method="post">
        {{@csrf_field()}}
        <table align="center">
        <br>
            <tr>
                <td>User Name</td>
				<td>:</td>
                <td><input type="text" placeholer="User Name" name="uname" value="{{old('uname')}}"></td>
                <td>
					@error('uname')
					<span>{{$message}}</span>
					@enderror
				</td>
            </tr>
            <tr>
                <td>Password</td>
				<td>:</td>
                <td><input type="password" placeholer="password" name="password"></td>
                <td>
                    @error('password')
                    <span>{{$message}}</span>
                    @enderror
                </td>
            </tr>
        </table><br>

         <input type="submit" class="btn btn-success">
        
    </form>
</fieldset>
@endsection

@section('demo')
    <h2 align="center">This is Demo Content</h2>
@endsection