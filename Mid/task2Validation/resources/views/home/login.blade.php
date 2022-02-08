@extends('layouts.app')
@section('content')
	<title> Login Page</title>

	<fieldset>
    <legend><b>LOGIN</b></legend>
    <form action="" method="">
        <table align="center">
        <br>
            <tr>
                <td>User Name</td>
				<td>:</td>
                <td><input type="text" placeholer="name" name="userName"></td>
            </tr>
            <tr>
                <td>Password</td>
				<td>:</td>
                <td><input type="password" placeholer="password" name="password"></td>
            </tr>
            <tr>
                <td colspan = 3 align="center"><br>
                <a href="{{route('registration')}}"><input type="button" name="" value="Registration"></a>
                <a href="{{route('login')}}"><input type="button" name="" value="Submit"></a>
                </td>
            </tr>
        </table><br>
        <!-- <input type="submit" name="submit" value="Submit">  -->
        
    </form>
</fieldset>
@endsection

@section('demo')
    <h2 align="center">This is Demo Content</h2>
@endsection