@extends('/layouts/_layouts')

@section('content')
<section id="w366_home_featured_product-2" class="widget w366_home_featured_product">
    <section id="home-featured-products">
        <div class="wrapper">
            <div class="inner">
                <div class="section-title">
                    <h2>Sản Phẩm Nổi Bật</h2>
                </div>
                <div class="section-content">
                    <div class="grid">
                        <div class="product-deal">
                            <div class="grid__item large--two-thirds medium--one-half small--one-whole">
                                <div style="width: 260px; height: 260px; overflow: hidden;">
                                    <img style="width: 100%; height: 100%;" src="{{ asset('/images/'.$vergest->images) }}" />
                                </div>
                            </div>
                            <div class="grid__item large--one-third medium--one-half small--one-whole">
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="https://at10.mediawz.com/san-pham/mung-toi/">{{$vergest->name}}</a>
                                    </div>
                                    <div class="product-price-review">
                                        <div class="product-price">
                                            <span class="current-price"><span class="woocommerce-Price-amount amount">{{$vergest->currentPrice}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                            <span class="original-price"><s><span class="woocommerce-Price-amount amount">{{$vergest->amountPrice}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        {{$vergest->describles}}
                                    </div>
                                    <div class="product-action">
                                        <a href="{{ route('destroy', ['id' => $vergest->id]) }}">
                                            <button type="button" class="btnHome btn-addToCart add-to-cart" data-id="1026672521"> <span>Delete</span></button><button style="display:none;" class=" btnHome btn-buyNow buy-now "></button>
                                        </a>
                                    </div>
                                    <div class="product-action">
                                        <a href="{{ route('editpage', ['id' => $vergest->id]) }}">
                                            <button type="button" class="btnHome btn-addToCart add-to-cart" data-id="1026672521"> <span>Edit</span></button><button style="display:none;" class=" btnHome btn-buyNow buy-now "></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection