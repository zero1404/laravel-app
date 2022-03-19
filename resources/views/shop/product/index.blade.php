@extends('shop.layouts.app')
@section('title', 'Sản phẩm')

@section('content')
<main>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Categories Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                    @foreach ($loai as $item)
                                    <div class="card">
                                        <div class="card-heading active">
                                            <a data-toggle="collapse" data-target="#{{ $item->slug }}">{{ $item->slug }}</a>
                                        </div>
                                        <div id="{{ $item->slug }}" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Coats</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">T-shirts</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="sidebar__color">
                            <div class="section-title">
                                <h4>Nhà tác giả</h4>
                            </div>
                            <div class="size__list color__list">
                                @foreach ($nxb as $item)
                                <label for="{{ $item->id }}">
                                    {{ $item->name }}
                                    <input type="checkbox" id="{{ $item->id }}">
                                    <span class="checkmark"></span>
                                </label>
                                @endforeach
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row">
                        @foreach ($products as $item)
                            <div class="col-lg-4 col-md-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ asset('shop/img/product/book1.jpg') }}">
                                        <div class="label new">old</div>
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
                        
                        <div class="col-lg-12 text-center">
                            <div class="pagination__option">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
    <!-- Trend Section End -->

    <!-- Discount Section Begin -->
    <!-- Discount Section End -->

    <!-- Services Section Begin -->
    <!-- Services Section End -->

    <!-- Instagram Begin -->

</main>
@endsection