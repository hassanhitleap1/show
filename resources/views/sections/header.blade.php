<?php
use App\Category;
$collection=Category::all();
?>
<div id="header">
    <div class="header">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="logo">
                            <a href="home-01.html"><img src="{{asset('/smartbuy/images/logo-1.png')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
                        <nav class="main-nav">
                            <a href="#" class="toggle-mobile-menu"><span></span></a>
                            <ul class="list-inline">
                                <li><a href="{{asset('/home')}}">Home</a></li>
                                @foreach ($collection as $item)
                                    <li><a href="{{asset($item->name)}}">{{$item->name}}</a></li>
                                @endforeach
                                    
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3  col-xs-3">
                        <div class="box-right">
                            <ul class="list-inline">
                                <li><a href="#" class="account"><i class="fa fa-user-o" aria-hidden="true"></i></a></li>
                                <li class="mini-cart-box">
                                    <a href="#"><i class="fa fa-opencart" aria-hidden="true"></i><sup>0</sup></a>
                                    <div class="mini-cart-content">
                                        <h2>(2) Items in my cart</h2>
                                        <div class="mini-cart-item">
                                            <div class="product-mini-cart clearfix">
                                                <div class="product-thumb">
                                                    <a href="#"><img src="{{asset('/smartbuy/images/products/garden/garden-06.jpg')}}" alt="" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                                    <div class="price">
                                                        <span class="old-price">$1,058.00</span>
                                                        <span class="new-price">$1,150.00</span>
                                                    </div>
                                                    <div class="rating-box">
                                                        <div class="product-rating">
                                                            <div class="inner-rating"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-mini-cart">
                                                <div class="product-thumb">
                                                    <a href="#"><img src="{{asset('/smartbuy/images/products/garden/garden-15-1.jpg')}}" alt="" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                                    <div class="price">
                                                        <span class="old-price">$1,058.00</span>
                                                        <span class="new-price">$1,150.00</span>
                                                    </div>
                                                    <div class="rating-box">
                                                        <div class="product-rating">
                                                            <div class="inner-rating"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mini-cart-total  clearfix">
                                            <strong class="pull-left">TOTAL</strong>
                                            <span class="pull-right">$800.00</span>
                                        </div>
                                        <div class="mini-cart-button">
                                            <a href="#">View cart </a>
                                            <a href="#">Checkout</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>