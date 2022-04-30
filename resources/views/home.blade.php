@extends('layouts.master')

@section('title', 'Home')

@section('CSS')

<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="home.css">
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
<!-- Index -->
<div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="row" style="padding: 1px">
                    <a href="product-grid">
                        <div class="card">
                            {{-- <img src="img/home/Jacket.jpg" class="figure-img img-fluid rounded" alt=""> --}}
                            <div class="menu_pic_01 p-2">
                                <div class="menu_content">
                                    <h1>Jacket</h1>
                                </div>
                            </div>
                            
                        </div>
                    </a>
                </div>
                <div class="row" style="padding: 1px">
                    <a href="product-grid">
                        <div class="card">
                            {{-- <img src="img/home/T-shirt.jpg" class="figure-img img-fluid rounded" alt=""> --}}
                            <div class="menu_pic_02 p-2">
                                <div class="menu_content">
                                    <h1>T-shirt</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row" style="padding: 1px">
                    <a href="product-grid">
                        <div class="card">
                            {{-- <img src="img/home/Accessory.jpg" class="figure-img img-fluid rounded" alt=""> --}}
                            <div class="menu_pic_03 p-2">
                                <div class="menu_content">
                                    <h1>Accessory</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="row" style="padding: 1px">
                    <a href="product-grid">
                        <div class="card">
                            {{-- <img src="img/home/Pants.jpg" class="figure-img img-fluid rounded" alt=""> --}}
                            <div class="menu_pic_04 p-2">
                                <div class="menu_content">
                                    <h1>Pants</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <br>
            </div>
        </div>
    </div>
    
@endsection

@section('footer')
    @parent
@endsection