@extends('layouts.master')

@section('title', 'Home')

@section('CSS')

<link rel="stylesheet" href="css/index.css">
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
<!-- Index -->
<div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <a href="product-grid">
                        <div class="card-1">
                            <img src="img/index/1.jpg" class="figure-img img-fluid rounded" alt="">
                        </div>
                    </a>
                </div>
                <div class="row">
                    <a href="product-grid">
                        <div class="card">
                            <img src="img/index/1.jpg" class="figure-img img-fluid rounded" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <a href="product-grid">
                        <div class="card">
                            <img src="img/index/2.jpg" class="figure-img img-fluid rounded" alt="">
                        </div>
                    </a>
                </div>
                <div class="row">
                    <a href="product-grid">
                        <div class="card">
                            <img src="img/index/3.jpg" class="figure-img img-fluid rounded" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <a href="product-grid">
                        <div class="card">
                            <img src="img/index/4.jpg" class="figure-img img-fluid rounded" alt="">
                        </div>
                    </a>
                </div>
                <div class="row">
                    <a href="product-grid">
                        <div class="card">
                            <img src="img/index/5.jpg" class="figure-img img-fluid rounded" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @parent
@endsection