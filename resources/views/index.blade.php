@extends('layouts.main')

@section('content')
<div class="box-slider">
    <div class="wrap-item" data-navigation="true" data-pagination="true" data-itemscustom="[[0,1]]" data-autoplay="false" data-transition="fade">
        <div class="wrap-slide">
            <div class="box-img">
                <a href="#"><img src="{{asset('/smartbuy/images/slide/slide-1.jpg')}}" alt="" /></a>
            </div>
            <div class="box-info-slide">
                <div class="container">
                    <div class="adv-info-slide">
                        <h2 class="animated" data-animated="fadeInLeftBig">good shop</h2>
                        <h3 class="animated" data-animated="flipInX">up to 50% off</h3>
                        <a href="#" class="animated has-bottom" data-animated="bounceInLeft">shop now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-slide">
            <div class="box-img box-img-2">
                <a href="#"><img src="{{asset('/smartbuy/images/slide/slide-2.jpg')}}" alt="" /></a>
            </div>
            <div class="box-info-slide">
                <div class="container">
                    <div class="adv-info-slide">
                        <h2 class="animated" data-animated="fadeInLeftBig">supper shop</h2>
                        <h3 class="animated" data-animated="flipInX">out top trend</h3>
                        <a href="#" class="animated has-bottom" data-animated="bounceInLeft">shop now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-slide">
            <div class="box-img box-img-3">
                <a href="#"><img src="{{asset('/smartbuy/images/slide/slide-3.jpg')}}" alt="" /></a>
            </div>
            <div class="box-info-slide">
                <div class="container">
                    <div class="adv-info-slide">
                        <h2 class="animated" data-animated="fadeInLeftBig">alo shop</h2>
                        <h3 class="animated" data-animated="flipInX">out top seller</h3>
                        <a href="#" class="animated has-bottom" data-animated="bounceInLeft">shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="box-product box-has-filter">
     
        <div class="tab-content">
            <div id="tab1" role="tabpanel" class="tab-pane fade in active">
                <div class="wrap-product">
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item">
                                    <div class="product-extra-link">
                                        <a href="{{$product->link}}" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                        <a href="{{$product->link}}" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span> to Product</span></a>
                                    </div>
                                    <div class="thumb-product">
                                        <a href="{{$product->link}}"><img src="{{asset($product->image_path)}}" alt="" /></a>
                                    </div>
                                    <div class="name-product">
                                        <h3><a href="{{$product->link}}">Click here to go product</a></h3>
                                    </div>
                                    <div class="box-cart">
                                        <a href="{{$product->link}}" class="cart">Buy product <i class="fa " aria-hidden="true"></i></a>
                                        <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                    </div>
                                    <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                                </div>
                        </div>
                        @endforeach
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/garden/garden-01.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-01.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-20.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-22.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-06.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/garden/garden-13.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-04.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-08.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-05.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-11.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/garden/garden-17.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-02.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-10.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/tech/tech-03.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-13.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/garden/garden-04.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/tech/tech-01.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/garden/garden-15.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-16.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="product-extra-link">
                                    <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                    <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                </div>
                                <div class="thumb-product">
                                    <a href="#"><img src="{{asset('/smartbuy/images/products/tech/tech-13.jpg')}}" alt="" /></a>
                                </div>
                                <div class="name-product">
                                    <h3><a href="#">Soma Glass Water Bottle</a></h3>
                                </div>
                                <div class="box-cart">
                                    <a href="#" class="cart">add to cart <i class="fa fa-opencart" aria-hidden="true"></i></a>
                                    <ins class="price"><sup>$</sup>85<sup>.99</sup></ins>
                                </div>
                                <a href="customize.html" class="customize various" data-fancybox-type="iframe"><i class="fa fa-wrench" aria-hidden="true"></i> customize</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="more">
            <a href="#"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>More</a>
        </div>
    </div>
</div>

@endsection