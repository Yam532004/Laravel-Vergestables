@extends('/layouts/_layouts')

@section ('hero')
<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Cart</h1>
                </div>
            </div>
            <div class="col-lg-7">

            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->
@endsection



@section ('content')
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<section id="w366_home_products-2" class="widget w366_home_products">
    <section id="home-collections">
        <div class="wrapper">
            <div class="inner">
                <div class="section-title">
                    <h2>Sản Phẩm Của Chúng Tôi</h2>
                </div>
                <form action="" method="get">
                <div class="col-4">
                    <input type="search" class="form-control" placeholder="KeyWord" name="keywords" value="{{request()->keywords}}">
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-primary btn-block" >Search</button>
                </div>
                </form>
                <div class="tab">
                    <a href="{{ route('cart') }}">Tất cả </a>
                    <a href="{{ route('food-category', ['category_id' => 4]) }}">Hoa quả</a>
                    <a href="{{ route('food-category', ['category_id' => 5]) }}">Thực phẩm khô</a>
                    <a href="{{ route('food-category', ['category_id' => 6]) }}">Rau hữu cơ</a>
                    <div id="tab_20" class="tabcontent" style="display: block;">
                        <div class="container">
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="row">
                                @foreach ($vergests as $vergest)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div style="width: 260px; height: 260px; overflow: hidden;">
                                            <img style="width: 380px; height: 304px;" src="{{ asset('/images/'.$vergest->images) }}" />
                                        </div>
                                        <div class="product-info">
                                            <div class="product-title">
                                                <a href="https://at10.mediawz.com/san-pham/nho-xanh/">{{$vergest->name}}</a>
                                            </div>
                                            <div class="product-price clearfix">
                                                <span class="current-price"><span class="woocommerce-Price-amount amount">{{$vergest->currentPrice}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                                <span class="original-price"><s><span class="woocommerce-Price-amount amount">{{$vergest->amountPrice}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                            </div>
                                            <div class="product-actions text-center clearfix">
                                                <a href="{{ route('showpage', ['id' => $vergest->id]) }}">
                                                    <button type="button" class="btn-buyNow buy-now medium--hide small--hide" data-id="1026777806">Detail</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</section>
@endsection