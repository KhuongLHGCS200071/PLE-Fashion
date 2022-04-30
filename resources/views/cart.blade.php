@extends('layouts.master')

@section('title', 'Cart')

@section('sidebar')
@parent
@endsection

@section('content')
<div class="wrapper">
    <!-- cart-main-area start -->
    <div class="cart-main-area ptb--100 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">products</th>
                                        <th class="product-name">name of products</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img
                                                    src="images/cart/2.png" alt="product img" /></a></td>
                                        <td class="product-name"><a href="#">New Dress For Sunday</a>
                                            <ul class="pro__prize">
                                                <li class="old__prize">$82.5</li>
                                                <li>$75.2</li>
                                            </ul>
                                        </td>
                                        <td class="product-price"><span class="amount">£165.00</span></td>
                                        <td class="product-quantity"><input type="number" value="1" /></td>
                                        <td class="product-subtotal">£165.00</td>
                                        <td class="product-remove"><a href="#"><i class="icon-trash icons"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img
                                                    src="images/cart/2.png" alt="product img" /></a></td>
                                        <td class="product-name"><a href="#">New Dress For Sunday</a>
                                            <ul class="pro__prize">
                                                <li class="old__prize">$82.5</li>
                                                <li>$75.2</li>
                                            </ul>
                                        </td>
                                        <td class="product-price"><span class="amount">£50.00</span></td>
                                        <td class="product-quantity"><input type="number" value="1" /></td>
                                        <td class="product-subtotal">£50.00</td>
                                        <td class="product-remove"><a href="#"><i class="icon-trash icons"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img
                                                    src="images/cart/2.png" alt="product img" /></a></td>
                                        <td class="product-name"><a href="#">New Dress For Sunday</a>
                                            <ul class="pro__prize">
                                                <li class="old__prize">$82.5</li>
                                                <li>$75.2</li>
                                            </ul>
                                        </td>
                                        <td class="product-price"><span class="amount">£50.00</span></td>
                                        <td class="product-quantity"><input type="number" value="1" /></td>
                                        <td class="product-subtotal">£50.00</td>
                                        <td class="product-remove"><a href="#"><i class="icon-trash icons"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img
                                                    src="images/cart/2.png" alt="product img" /></a></td>
                                        <td class="product-name"><a href="#">New Dress For Sunday</a>
                                            <ul class="pro__prize">
                                                <li class="old__prize">$82.5</li>
                                                <li>$75.2</li>
                                            </ul>
                                        </td>
                                        <td class="product-price"><span class="amount">£50.00</span></td>
                                        <td class="product-quantity"><input type="number" value="1" /></td>
                                        <td class="product-subtotal">£50.00</td>
                                        <td class="product-remove"><a href="#"><i class="icon-trash icons"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="buttons-cart--inner">
                                    <div class="buttons-cart">
                                        <a href="#">Continue Shopping</a>
                                    </div>
                                    <div class="buttons-cart checkout--btn">
                                        <a href="#">update</a>
                                        <a href="#">checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end -->
</div>
@endsection

@section('footer')
@parent
@endsection