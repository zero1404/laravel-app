@extends('shop.layouts.app')
@section('title', 'Trang Chủ')

@section('content')
<main>

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories__item categories__large__item set-bg" data-setbg="{{asset ('shop/img/categories/sach2.jpeg') }}">
                        <div class="categories__text">
                            <h1 style="color: #fff;">Những câu nói hay về sách giúp bạn thay đổi cuộc sống</h1>
                            <p style="color: #000;">Sách là kho tàng tri thức quý báu của nhân loại. Sách khai sáng trí tuệ, sách mở mang nhận thức, sách làm đẹp tâm hồn</p>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="{{asset ('shop/img/categories/sach3.png') }}">
                                <div class="categories__text">
                                    <h4>7 cuốn sách được Amazon đánh giá hay nhất năm 2019</h4>
                                    <p style="color: #000;">Amazon vừa đưa ra danh sách "Những cuốn sách hay nhất năm 2019" tính đến hiện tại.</p>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="{{asset ('shop/img/categories/sach4.jpg') }}">
                                <div class="categories__text">
                                    <h4>Đọc sách là một sự thưởng thức</h4>
                                    <p style="color: #000;"> Tiến sỹ Honor Wilson – Fletcher, chuyên gia về lĩnh vực PR đã nói rằng đọc sách giúp “mở ra những cánh cửa và làm cuộc sống đơn giản hơn, với bất cứ thể loại sách nào”. </p>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="{{asset ('shop/img/categories/sach5.jpg') }}">
                                <div class="categories__text">
                                    <h4>Sách mới tháng 9: 'Khi đại dịch thế kỷ Covid-19 đi qua'</h4>
                                    <p style="color: #000;">Những sự kiện, câu chuyện, nhân vật của đại dịch Covid-19 đã được ghi lại qua cuốn sách sinh động, giàu nhân văn của tác giả Sương Nguyệt Minh đang được bạn đọc đón nhận, chia sẻ và đồng cảm.</p>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="{{asset ('shop/img/categories/sach7.jpg') }}">
                                <div class="categories__text">
                                    <h4>Sách là gì? Lợi ích, vai trò và những giá trị của sách trong cuộc sống?</h4>
                                    <p style="color: #000;">Mỗi người đều có một định nghĩa riêng về sách khác nhau. Vậy thật sự sách là gì? Lợi ích của việc đọc sách là gì mà lại có nhiều người đam mê đọc sách đến vậy? Hãy cùng theo dõi bài viết dưới đây để biết tất tần tật về sách.</p>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Product Section Begin -->

    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title">
                        <h4>New product</h4>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">All</li>
                        @foreach ($loai as $item)
                            <li data-filter="">{{$item->title}}</li>
                        @endforeach
                    </ul>
                </div>
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
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Buttons tweed blazer</a></h6>
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
    <section class="banner set-bg" data-setbg="img/banner/banner-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 m-auto">
                    <div class="banner__slider owl-carousel">
                        <div class="banner__item" >
                            <div class="banner__text" data-setbg="">
                                <img style="height: 300px; width: 100%;" src="{{asset ('shop/img/categories/sach5.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <img style="height: 300px; width: 100%;" src="{{asset ('shop/img/categories/sach7.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <img style="height: 300px; width: 100%;" src="{{asset ('shop/img/categories/sach4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Trend Section Begin -->
    <section class="trend spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Hot Trend</h4>
                        </div>
                        @foreach($products as $item)
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img style="height: 100px" src="{{ asset('shop/img/product/book1.jpg') }}" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>{{$item->title}}</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ {{$item->price}}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Best seller</h4>
                        </div>
                        @foreach($products as $item)
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img style="height: 100px" src="{{ asset('shop/img/product/book1.jpg') }}" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>{{$item->title}}</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ {{$item->price}}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Feature</h4>
                        </div>
                        @foreach($products as $item)
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img style="height: 100px" src="{{ asset('shop/img/product/book1.jpg') }}" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>{{$item->title}}</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ {{$item->price}}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trend Section End -->

    <!-- Discount Section Begin -->
    <!-- Discount Section End -->

    <!-- Services Section Begin -->
    <!-- Services Section End -->

    <!-- Instagram Begin -->

</main>
@endsection