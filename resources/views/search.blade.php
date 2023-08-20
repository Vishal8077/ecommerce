@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="#">Filter</a>
            </div>
            <div class="col-sm-4">
                <h2>Result For Product</h2>
            @foreach ($product as $item )
            <a href="detail/{{$item['id']}}">
            <img src="" alt="" class="detail-img">
            <h2>Name : {{$item['name']}}</h2>
            <h2>Price : {{$item['price']}}</h2>
            <h2>Category : {{$item['Category']}}</h2>
            <h2>Description : {{$item['description']}}</h2>
            </a>
            @endforeach
            </div>
           </div>
    </div>
@endsection
