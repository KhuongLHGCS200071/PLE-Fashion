@extends('layouts.master')

@section('title', 'Login')

@section('sidebar')
@parent
@endsection

@section('content')
<div class="wrapper">
    <!-- wishlist-area start -->
    <div class="wishlist-area ptb--100 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="wishlist-content">
                        <form action="#">
                            <div class="wishlist-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-remove"><span class="nobr">Remove</span></th>
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name"><span class="nobr">Product Name</span></th>
                                            <th class="product-price"><span class="nobr"> Unit Price </span></th>
                                            <th class="product-stock-stauts"><span class="nobr"> Stock Status </span></th>
                                            <th class="product-add-to-cart"><span class="nobr">Add To Cart</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-remove"><a href="#">×</a></td>
                                            <td class="product-thumbnail"><a href="#"><img
                                                        src="images/cart/2.png" alt="" /></a></td>
                                            <td class="product-name"><a href="#">Vestibulum suscipit</a></td>
                                            <td class="product-price"><span class="amount">£165.00</span></td>
                                            <td class="product-stock-status"><span class="wishlist-in-stock">In
                                                    Stock</span></td>
                                            <td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-remove"><a href="#">×</a></td>
                                            <td class="product-thumbnail"><a href="#"><img
                                                        src="images/cart/2.png" alt="" /></a></td>
                                            <td class="product-name"><a href="#">Vestibulum dictum magna</a></td>
                                            <td class="product-price"><span class="amount">£50.00</span></td>
                                            <td class="product-stock-status"><span class="wishlist-in-stock">In
                                                    Stock</span></td>
                                            <td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="6">
                                                <div class="wishlist-share">
                                                    <h4 class="wishlist-share-title">Share on:</h4>
                                                    <div class="social-icon">
                                                        <ul>
                                                            <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-tumblr"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wishlist-area end -->
</div>
<!-- Body main wrapper end -->
@endsection

@section('footer')
@parent
@endsection