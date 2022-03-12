<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}


?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><b>E-Commerce</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/"><span class="glyphicon glyphicon-home"></span> Home </a></li>
        @if(Session::has('user'))
        <li class=""><a href="/myorders">Orders </a></li>
        @endif
      </ul>
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">
        <span class="glyphicon glyphicon-search"></span> Search</button>
      </form>

      <ul class="nav navbar-nav">
        @if(!Session::has('user'))
        <li class=""><a href="/aboutus">About-Us </a></li>
        <li class=""><a href="/contactus">Contact-Us </a></li>
        @endif 
      </ul>

      <ul class="nav navbar-nav navbar-right">
        @if(Session::has('user'))
        <li><a href="/cartlist">Cart({{$total}})<span class="glyphicon glyphicon-shopping-cart"></span></a></li>
        <li><a href="{{route('user.details',['id'=>Session::get('user')['id']])}}"><span class="glyphicon glyphicon-user"></span></a></li>
              <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
              <span class="glyphicon glyphicon-user"></span>
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="/aboutus">About-Us</a></li>
              <li><a href="/contactus">Contact-Us</a></li>
              <li><a href="/logout"><b>Logout</b></a></li>
              </ul>
              </li>
          @else
          <li><a href="/login"><b>Login</b></a></li>
          <li><a href="/signup"><b>Sign-Up</b></a></li>
          @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>