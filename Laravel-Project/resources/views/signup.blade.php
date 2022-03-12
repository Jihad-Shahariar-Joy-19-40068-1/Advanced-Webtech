@extends('master')
@section("content")

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="signup" method="POST" >
            @csrf
                <div class="form-group">   
                <label for="exampleInputName">User Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="User Name">
                        @error('name')
						<span>{{$message}}</span>
						@enderror
                </div>
                <div class="form-group">   
                <label for="exampleInputEmail">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                        @error('email')
						<span>{{$message}}</span>
						@enderror
                </div>
                <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                        @error('password')
						<span>{{$message}}</span>
						@enderror
                </div>
                <div class="form-group">   
                <label for="exampleInputDOB">Email address</label>
                <input type="date" name="dob" class="form-control" id="exampleInputEmail" placeholder="Date of Birth">
                        @error('dob')
						<span>{{$message}}</span>
						@enderror
                </div>
                <br>
                <center><button type="submit" class="btn btn-success btn-lg">Sign-Up</button></center>
            </form>
        </div>
    </div>
</div>

@endsection