<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
    $total=ProductController::cartItem();
}
?>










<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/">E-Commers</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Service</a></li>
      </ul>
      <ul>
        <form class="navbar-form navbar-left" action="/search">
            <div class="form-group">
              <input type="text" name="query" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/cartlist"><span class="glyphicon glyphicon-user"></span> Add To Cart ({{$total}})</a></li>
        @if (Session::has('user'))
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @else
          <li><a href="/login">Login</a></li>
          @endif
        {{-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> --}}
      </ul>
    </div>
  </nav>
