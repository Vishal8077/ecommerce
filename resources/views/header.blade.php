<?php
use App\Http\Controller\ProductController;
$total=0;
if(Session::has('user'))
{
    $total=ProductController::cartItem();
}
?>










<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">WebSiteName</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Service</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Add To Cart ({{$total}})</a></li>
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

          <li><a href="#">Page 2</a></li>
          <li><a href="#">Page 3</a></li>
        {{-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> --}}
      </ul>
    </div>
  </nav>
