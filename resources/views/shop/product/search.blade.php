@extends('shop.layouts.app')
@section('title', 'Kết quả tìm kiếm')

@section('content')
<main>

    <!-- Categories Section Begin -->
  
    <!-- Categories Section End -->

    <!-- Product Section Begin -->

    <section class="product spad">
        <div class="container">
            <div class="row">
                <h1 style="font-size: 20px; color: #000;" class="mb-3"> Kết quả tìm kiếm: {{ $key }}</h1>
            </div>
            <div class="row property__gallery">
                @foreach ($products as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{ asset('shop/img/product/book1.jpg') }}">
                            <div class="label new">New</div>
                            <ul class="product__hover">
                                <li><a href="{{ asset('shop/img/product/book1.jpg') }}" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="/products/{{ $item->slug }}"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">{{ $item->title }}</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">{{ $item->price }}</div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Banner Section Begin -->
  
    <!-- Banner Section End -->

    <!-- Trend Section Begin -->
    <!-- Trend Section End -->

    <!-- Discount Section Begin -->
    <!-- Discount Section End -->

    <!-- Services Section Begin -->
    <!-- Services Section End -->

    <!-- Instagram Begin -->

</main>
@endsection