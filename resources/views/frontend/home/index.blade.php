@extends('frontend.layout.master')

@section('content')

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/img-5.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-1.jpg') }}">
                            <h5><a href="#">Soft Drinks</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-2.jpg') }}">
                            <h5><a href="#">Dried Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-3.jpg') }}">
                            <h5><a href="#">Pastry</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-4.jpg') }}">
                            <h5><a href="#">drink fruits</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-5.jpg') }}">
                            <h5><a href="#">Dairy Products</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".groceries">Groceries</li>
                            <li data-filter=".Pastry">Pastry</li>
                            <li data-filter=".Soft-drinks">Soft Drinks</li>
                            <li data-filter=".dairy">Dairy Products</li>
                            <li data-filter=".dry">Dry Fruit</li>
                            <li data-filter=".detergents">Detergents</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix Pastry">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/27.jpg') }}">

                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>120 AFG</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Pastry">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/24.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>120 AFG</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Pastry">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/29.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>120 AFG</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Pastry">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/28.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>120 AFG</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Soft-drinks">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/3.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>30 AFG</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Soft-drinks">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/8.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Coca cola</a></h6>
                            <h5>30 AFG</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Soft-drinks">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/4.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Soft-drinks">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/7.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>30 AFG</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix dairy">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/35.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Cheese</a></h6>
                            <h5>30 AFG</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix dairy">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/33.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Cream</a></h6>
                            <h5>30 AFG</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix dairy">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/36.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">ButterMilk</a></h6>
                            <h5>25 Afg</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix dairy">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/31.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Milk</a></h6>
                            <h5>40 AFG</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix dry">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/11.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Dry fruit</a></h6>
                            <h5>550 AFG</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix dry">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/15.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Almond</a></h6>
                            <h5>450 AFG</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix dry">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/17.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Pistachio</a></h6>
                            <h5>500 AFG</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix dry">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/20.jpg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Dry fruit</a></h6>
                            <h5>400 AFG</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ asset('frontend/img/banner/banner-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ asset('frontend/img/banner/banner-2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('frontend/img/latest-product/16.jpg') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Almond</h6>
                                        <span>400 AFG</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('frontend/img/latest-product/18.jpg') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Pistachio</h6>
                                        <span>500 AFG</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('frontend/img/latest-product/22.jpg') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cake</h6>
                                        <span>120 AFG</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('frontend/img/latest-product/16.jpg') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Almond</h6>
                                        <span>400 AFG</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('frontend/img/latest-product/18.jpg') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Pistachio</h6>
                                        <span>500 AFG</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('frontend/img/latest-product/22.jpg') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cake</h6>
                                        <span>120 AFG</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('frontend/img/latest-product/14.jpg') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Almond</h6>
                                        <span>400 AFG</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('frontend/img/latest-product/17.jpg') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Pistachio</h6>
                                        <span>500 AFG</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('frontend/img/latest-product/30.jpg') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cake</h6>
                                        <span>120 AFG</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('frontend/img/latest-product/14.jpg') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Almond</h6>
                                        <span>400 AFG</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('frontend/img/latest-product/17.jpg') }} alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Pistachio</h6>
                                        <span>500 AFG</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('frontend/img/latest-product/30.jpg') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cake</h6>
                                        <span>120 AFG</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('frontend/img/latest-product/15.jpg') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Almond</h6>
                                        <span>400 AFG</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('frontend/img/latest-product/13.jpg') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Dry Fruits</h6>
                                        <span>300 AFG</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('frontend/img/latest-product/27.jpg') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cake</h6>
                                        <span>120 AFG</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('frontend/img/latest-product/15.jpg') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Almond</h6>
                                        <span>400 AFG</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('frontend/img/latest-product/13.jpg') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>dRY Fruits</h6>
                                        <span>300 AFG</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('frontend/img/latest-product/27.jpg') }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cake</h6>
                                        <span>120 AFG</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

@endsection
