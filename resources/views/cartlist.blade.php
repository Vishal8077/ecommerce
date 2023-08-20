@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="/">In cart</a>
            </div>
            <div class="col-sm-4">
                <h2>Cart List</h2>
            @foreach ($products as $item )
            <a href="detail/{{$item->id}}">
            <img src="" alt="" class="detail-img">
            <h2>Name : {{$item->name}}</h2>
            <h2>Price : {{$item->price}}</h2>
            {{-- <h2>Category : {{$item->Category}}</h2> --}}
            <h2>Description : {{$item->description}}</h2>
            </a>
            <div class="col-sm-3">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
            </div>
            @endforeach
            </div>
           </div>
    </div>
@endsection
