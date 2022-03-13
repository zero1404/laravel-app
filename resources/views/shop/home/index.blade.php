@extends('shop.layouts.app')
@section('title', 'Trang Chủ')

@section('content')
<main>

  <div class="slider-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="slider-active dot-style">

            <div class="single-slider slider-height slider-bg1 d-flex align-items-center">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                    <div class="hero-caption text-center">
                      <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
                      <h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of Phipino</h1>
                      <a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Browse Store</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="single-slider slider-height slider-bg2 d-flex align-items-center">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                    <div class="hero-caption text-center">
                      <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
                      <h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of Phipino</h1>
                      <a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Browse Store</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="single-slider slider-height slider-bg3 d-flex align-items-center">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                    <div class="hero-caption text-center">
                      <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
                      <h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of Phipino</h1>
                      <a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Browse Store</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="best-selling section-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8">
          <div class="section-tittle text-center mb-55">
            <h2>Best Selling Books Ever</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="selling-active">

            <div class="properties pb-20">
              <div class="properties-card">
                <div class="properties-img">
                  <a href="book-details.html"><img
                      src="assets/img/gallery/xbest_selling1.jpg.pagespeed.ic.uYyNGXGP9B.jpg" alt=""></a>
                </div>
                <div class="properties-caption">
                  <h3><a href="book-details.html">Moon Dance</a></h3>
                  <p>J. R Rain</p>
                  <div class="properties-footer d-flex justify-content-between align-items-center">
                    <div class="review">
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                      </div>
                      <p>(<span>120</span> Review)</p>
                    </div>
                    <div class="price">
                      <span>$50</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="properties pb-20">
              <div class="properties-card">
                <div class="properties-img">
                  <a href="book-details.html"><img
                      src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.xDoolBlJLs.jpg" alt=""></a>
                </div>
                <div class="properties-caption">
                  <h3><a href="book-details.html">Moon Dance</a></h3>
                  <p>J. R Rain</p>
                  <div class="properties-footer d-flex justify-content-between align-items-center">
                    <div class="review">
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                      </div>
                      <p>(<span>120</span> Review)</p>
                    </div>
                    <div class="price">
                      <span>$50</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="properties pb-20">
              <div class="properties-card">
                <div class="properties-img">
                  <a href="book-details.html"><img
                      src="{{asset ('shop/img/gallery/xbest_selling3.jpg.pagespeed.ic.-NJM7dOo6y.jpg') }}" alt=""></a>
                </div>
                <div class="properties-caption">
                  <h3><a href="book-details.html">Moon Dance</a></h3>
                  <p>J. R Rain</p>
                  <div class="properties-footer d-flex justify-content-between align-items-center">
                    <div class="review">
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                      </div>
                      <p>(<span>120</span> Review)</p>
                    </div>
                    <div class="price">
                      <span>$50</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="properties pb-20">
              <div class="properties-card">
                <div class="properties-img">
                  <a href="book-details.html"><img
                      src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.SS9XjNMbIy.jpg" alt=""></a>
                </div>
                <div class="properties-caption">
                  <h3><a href="book-details.html">Moon Dance</a></h3>
                  <p>J. R Rain</p>
                  <div class="properties-footer d-flex justify-content-between align-items-center">
                    <div class="review">
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                      </div>
                      <p>(<span>120</span> Review)</p>
                    </div>
                    <div class="price">
                      <span>$50</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="properties pb-20">
              <div class="properties-card">
                <div class="properties-img">
                  <a href="book-details.html"><img
                      src="assets/img/gallery/xbest_selling5.jpg.pagespeed.ic.EAW_m0sR2a.jpg" alt=""></a>
                </div>
                <div class="properties-caption">
                  <h3><a href="book-details.html">Moon Dance</a></h3>
                  <p>J. R Rain</p>
                  <div class="properties-footer d-flex justify-content-between align-items-center">
                    <div class="review">
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                      </div>
                      <p>(<span>120</span> Review)</p>
                    </div>
                    <div class="price">
                      <span>$50</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="properties pb-20">
              <div class="properties-card">
                <div class="properties-img">
                  <a href="book-details.html"><img
                      src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.bfR6lCdMw-.jpg" alt=""></a>
                </div>
                <div class="properties-caption">
                  <h3><a href="book-details.html">Moon Dance</a></h3>
                  <p>J. R Rain</p>
                  <div class="properties-footer d-flex justify-content-between align-items-center">
                    <div class="review">
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                      </div>
                      <p>(<span>120</span> Review)</p>
                    </div>
                    <div class="price">
                      <span>$50</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="properties pb-20">
              <div class="properties-card">
                <div class="properties-img">
                  <a href="book-details.html"><img
                      src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.SS9XjNMbIy.jpg" alt=""></a>
                </div>
                <div class="properties-caption">
                  <h3><a href="book-details.html">Moon Dance</a></h3>
                  <p>J. R Rain</p>
                  <div class="properties-footer d-flex justify-content-between align-items-center">
                    <div class="review">
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                      </div>
                      <p>(<span>120</span> Review)</p>
                    </div>
                    <div class="price">
                      <span>$50</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="services-area2 top-padding">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 col-lg-9 col-md-8">
          <div class="row">

            <div class="col-xl-12">
              <div class="section-tittle d-flex justify-content-between align-items-center mb-40">
                <h2 class="mb-0">Featured This Week</h2>
                <a href="#" class="browse-btn">View All</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="services-active">

                <div class="single-services d-flex align-items-center">
                  <div class="features-img">
                    <img src="assets/img/gallery/xbest-books1.jpg.pagespeed.ic.dTqvd-Dzi4.jpg" alt="">
                  </div>
                  <div class="features-caption">
                    <img src="assets/img/icon/logo.svg/" alt="">
                    <h3>The Rage of Dragons</h3>
                    <p>By Evan Winter</p>
                    <div class="price">
                      <span>$50.00</span>
                    </div>
                    <div class="review">
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                      </div>
                      <p>(120 Review)</p>
                    </div>
                    <a href="book-details.html" class="border-btn">View Details</a>
                  </div>
                </div>

                <div class="single-services d-flex align-items-center">
                  <div class="features-img">
                    <img src="assets/img/gallery/xbest-books1.jpg.pagespeed.ic.dTqvd-Dzi4.jpg" alt="">
                  </div>
                  <div class="features-caption">
                    <img src="assets/img/icon/logo.svg/" alt="">
                    <h3>The Rage of Dragons</h3>
                    <p>By Evan Winter</p>
                    <div class="price">
                      <span>$50.00</span>
                    </div>
                    <div class="review">
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                      </div>
                      <p>(120 Review)</p>
                    </div>
                    <a href="book-details.html" class="border-btn">View Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-9">

          <div class="google-add">
            <img src="assets/img/gallery/xad.jpg.pagespeed.ic.qPHHJH-GhH.jpg" alt="" class="w-100">
          </div>
        </div>
      </div>
    </div>
  </div>


  <section class="our-client section-padding best-selling">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-xl-5 col-lg-5 col-md-12">

          <div class="section-tittle  mb-40">
            <h2>Latest Published items</h2>
          </div>
        </div>
        <div class="col-xl-7 col-lg-7 col-md-12">
          <div class="nav-button mb-40">

            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link active" id="nav-one-tab" data-bs-toggle="tab" href="#nav-one" role="tab"
                  aria-controls="nav-one" aria-selected="true">All</a>
                <a class="nav-link" id="nav-two-tab" data-bs-toggle="tab" href="#nav-two" role="tab"
                  aria-controls="nav-two" aria-selected="false">Horror</a>
                <a class="nav-link" id="nav-three-tab" data-bs-toggle="tab" href="#nav-three" role="tab"
                  aria-controls="nav-three" aria-selected="false">Thriller</a>
                <a class="nav-link" id="nav-four-tab" data-bs-toggle="tab" href="#nav-four" role="tab"
                  aria-controls="nav-four" aria-selected="false">Science Fiction</a>
                <a class="nav-link" id="nav-five-tab" data-bs-toggle="tab" href="#nav-five" role="tab"
                  aria-controls="nav-five" aria-selected="false">History</a>
              </div>
            </nav>

          </div>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">

          <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.I1tWDKCBJ-.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling8.jpg.pagespeed.ic.DxXSrUIXGk.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.bfR6lCdMw-.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.SS9XjNMbIy.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.t9lNibrWVM.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.xDoolBlJLs.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">

          <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.SS9XjNMbIy.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.t9lNibrWVM.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.xDoolBlJLs.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.I1tWDKCBJ-.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling8.jpg.pagespeed.ic.DxXSrUIXGk.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.bfR6lCdMw-.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">

          <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.I1tWDKCBJ-.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling8.jpg.pagespeed.ic.DxXSrUIXGk.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.bfR6lCdMw-.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.SS9XjNMbIy.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.t9lNibrWVM.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.xDoolBlJLs.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">

          <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.t9lNibrWVM.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.xDoolBlJLs.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.I1tWDKCBJ-.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling8.jpg.pagespeed.ic.DxXSrUIXGk.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.bfR6lCdMw-.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.SS9XjNMbIy.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-five" role="tabpanel" aria-labelledby="nav-five-tab">

          <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.I1tWDKCBJ-.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling8.jpg.pagespeed.ic.DxXSrUIXGk.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.bfR6lCdMw-.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.SS9XjNMbIy.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.t9lNibrWVM.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
              <div class="properties pb-30">
                <div class="properties-card">
                  <div class="properties-img">
                    <a href="book-details.html"><img
                        src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.xDoolBlJLs.jpg" alt=""></a>
                  </div>
                  <div class="properties-caption properties-caption2">
                    <h3><a href="book-details.html">Moon Dance</a></h3>
                    <p>J. R Rain</p>
                    <div class="properties-footer d-flex justify-content-between align-items-center">
                      <div class="review">
                        <div class="rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>(<span>120</span> Review)</p>
                      </div>
                      <div class="price">
                        <span>$50</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="more-btn text-center mt-15">
            <a href="#" class="border-btn border-btn2 more-btn2">Browse More</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-xl-6 col-lg-6">
        <div class="wantToWork-area w-padding2 mb-30" data-background="assets/img/gallery/wants-bg1.jpg">
          <h2>The History<br> of Phipino</h2>
          <div class="linking">
            <a href="#" class="btn wantToWork-btn">View Details</a>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6">
        <div class="wantToWork-area w-padding2 mb-30" data-background="assets/img/gallery/wants-bg2.jpg">
          <h2>Wilma Mumduya</h2>
          <div class="linking">
            <a href="#" class="btn wantToWork-btn">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="subscribe-area">
    <div class="container">
      <div class="subscribe-caption text-center  subscribe-padding section-img2-bg"
        data-background="assets/img/gallery/section-bg1.jpg">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-8 col-md-9">
            <h3>Join Newsletter</h3>
            <p>Lorem started its journey with cast iron (CI) products in 1980. The initial main objective was to
              ensure pure water and affordable irrigation.</p>
            <form action="#">
              <input type="text" placeholder="Enter your email">
              <button class="subscribe-btn">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection