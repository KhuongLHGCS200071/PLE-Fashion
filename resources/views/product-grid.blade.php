@extends('layouts.master')

@section('title', 'Product Grid')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="wrapper">
        <!-- Start Product Grid -->
        <section class="htc__product__grid bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12 col-xs-12">
                        <div class="htc__product__rightidebar">
                            <div class="htc__grid__top">
                                <div class="htc__select__option">
                                    <select class="ht__select">
                                        <option>Default softing</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by average rating</option>
                                        <option>Sort by newness</option>
                                    </select>
                                    <select class="ht__select">
                                        <option>Show by</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by average rating</option>
                                        <option>Sort by newness</option>
                                    </select>
                                </div>
                                <div class="ht__pro__qun">
                                    <span>Showing 1-12 of 1033 products</span>
                                </div>
                                <!-- Start List And Grid View -->
                                <ul class="view__mode" role="tablist">
                                    <li role="presentation" class="grid-view active"><a href="#grid-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>
                                    <li role="presentation" class="list-view"><a href="#list-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
                                </ul>
                                <!-- End List And Grid View -->
                            </div>
                            <!-- Start Product View -->
                            <div class="row">
                                <div class="shop__grid__view__wrap">
                                    <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
                                        <!-- Start Single Product -->
                                        @foreach ($product as $item)
                                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                            <div class="category">
                                                <div class="ht__cat__thumb">
                                                    <a href="product-details-{{$item->id}}">
                                                        <img src="{{$item->img_1}}" alt="product images">
                                                    </a>
                                                </div>
                                                <div class="fr__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="wishlist" class="iconpadding"><i class="icon-heart icons"></i></a></li>
                                                        <li><a href="cart" class="iconpadding"><i class="icon-handbag icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="fr__product__inner">
                                                        <h4><a href="product-details-{{$item->id}}">{{$item->name}}</a></h4>
                                                        <ul class="fr__pro__prize">
                                                        <li class="old__prize">$ {{$item->price}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- End Single Product -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Product View -->
                        </div>
                        <!-- Start Pagenation -->
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="htc__pagenation">
                                   <li><a href="#" class="iconpadding"><i class="zmdi zmdi-chevron-left"></i></a></li> 
                                   <li><a href="#">1</a></li> 
                                   <li class="active"><a href="#">3</a></li>   
                                   <li><a href="#">19</a></li> 
                                   <li><a href="#" class="iconpadding"><i class="zmdi zmdi-chevron-right"></i></a></li> 
                                </ul>
                            </div>
                        </div>
                        <!-- End Pagenation -->
                    </div>
                    <div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 col-sm-12 col-xs-12 smt-40 xmt-40">
                        <div class="htc__product__leftsidebar">
                            <!-- Start Prize Range -->
                            <div class="htc-grid-range">
                                <h4 class="title__line--4">Price</h4>
                                <div class="content-shopby">
                                    <div class="price_filter s-filter clear">
                                        <form action="#" method="GET">
                                            <div id="slider-range"></div>
                                            <div class="slider__range--output">
                                                <div class="price__output--wrap">
                                                    <div class="price--output">
                                                        <span>Price :</span><input type="text" id="amount" readonly>
                                                    </div>
                                                    <div class="price--filter">
                                                        <a href="#">Filter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Prize Range -->
                            <!-- Start Category Area -->
                            <div class="htc__category">
                                <h4 class="title__line--4">categories</h4>
                                <ul class="ht__cat__list">
                                    @foreach ($category as $item)
                                    <li><a href="#">{{$item->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- End Category Area -->
                            
                            <!-- Start Pro Color -->
                            <div class="ht__pro__color">
                                <h4 class="title__line--4">color</h4>
                                <ul class="ht__color__list">
                                    <li class="grey"><a href="#">grey</a></li>
                                    <li class="lamon"><a href="#">lamon</a></li>
                                    <li class="white"><a href="#">white</a></li>
                                    <li class="red"><a href="#">red</a></li>
                                    <li class="black"><a href="#">black</a></li>
                                    <li class="pink"><a href="#">pink</a></li>
                                </ul>
                            </div>
                            <!-- End Pro Color -->
                            <!-- Start Pro Size -->
                            <div class="ht__pro__size">
                                <h4 class="title__line--4">Size</h4>
                                <ul class="ht__size__list">
                                    <li><a href="#">xs</a></li>
                                    <li><a href="#">s</a></li>
                                    <li><a href="#">m</a></li>
                                    <li><a href="#">reld</a></li>
                                    <li><a href="#">xl</a></li>
                                </ul>
                            </div>
                            <!-- End Pro Size -->
                            <!-- Start Tag Area -->
                            <div class="htc__tag">
                                <h4 class="title__line--4">tags</h4>
                                <ul class="ht__tag__list">
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">bag</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="#">Jewelry</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Aceessories</a></li>
                                    <li><a href="#">Store</a></li>
                                    <li><a href="#">Watch</a></li>
                                    <li><a href="#">Other</a></li>
                                </ul>
                            </div>
                            <!-- End Tag Area -->
                            <!-- Start Compare Area -->
                            <div class="htc__compare__area">
                                <h4 class="title__line--4">compare</h4>
                                <ul class="htc__compare__list">
                                    <li><a href="#">White men’s polo<i class="icon-trash icons"></i></a></li>
                                    <li><a href="#">T-shirt for style girl...<i class="icon-trash icons"></i></a></li>
                                    <li><a href="#">Basic dress for women...<i class="icon-trash icons"></i></a></li>
                                </ul>
                                <ul class="ht__com__btn">
                                    <li><a href="#">clear all</a></li>
                                    <li class="compare"><a href="#">Compare</a></li>
                                </ul>
                            </div>
                            <!-- End Compare Area -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Grid -->
    </div>
@endsection

@section('footer')
    @parent
@endsection