@extends('/layouts/_layouts')

@section('hero')
<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Shop</h1>
                </div>
            </div>
            <div class="col-lg-7">

            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->
@endsection

@section('content')
<a class="btn btn-primary" href="{{route('createpage')}}">Create</a>
<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row">
            @foreach ( $vergests as $vergest )
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="#">
                    <img  src="{{ asset('/images/'.$vergest->images) }}" class="img-fluid product-thumbnail">
                    <h3 class="product-title">{{$vergest->name}}</h3>
                    <strong class="product-price">{{$vergest->price}}</strong>
                    <a class="btn btn" href="{{route('showpage',[$vergest->id])}}" >
                        <img src="images/cross.svg" class="img-fluid">
                    </a>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection