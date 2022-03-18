@extends('layouts.app')
@section('content')
<center>

<div class="">
    
        <fieldset>
        <legend><h2 style="color: black"><b>User Info</b></h2></legend>
                <table class="table table-borderd userTable" >
                <tr>
                    <td><label style="color: black">User Name</label></td>
                    <td><label style="color: black"> : </label></td>
                    <td><label style="color: black">{{$user->uname}}</label><td>
                </tr>
                
                <tr>
                    <td><label style="color: black">Email</label></td>
                    <td><label style="color: black"> : </label></td>
                    <td><label style="color: black">{{$user->email}}</label></td>
                </tr>
                
                <tr>
                    <td><label style="color: black">Date of Birth</label></td>
                    <td><label style="color: black"> : </label></td>
                    <td><label style="color: black">{{$user->dob}}</label></td>
                </tr> 
                
                <tr>
                    <td><label style="color: black">User Status</label></td>
                    <td><label style="color: black"> : </label></td>
                    <td><label style="color: black">{{$user->status}}</label></td>
                </tr>
                <tr>
                <td colspan= 3><center><a href="" class="btn btn-success btn-lg">Edit</a></center></td>
                </tr>
                </table>
            </fieldset>

</div>

</center>
@endsection