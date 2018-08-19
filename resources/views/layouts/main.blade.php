<!DOCTYPE HTML>
<html lang="en-US">

<!-- Mirrored from demo.7uptheme.com/html/smartbuy/home-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Aug 2018 13:32:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('sections.head')
<body>
<div class="wrap">
    @include('sections.header')
    <!-- End Header -->
    <div id="content">
        <div class="content">
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
            <div class="main-header">
                <div class="box-search">
                    <form class="search-form search-form6 clearfix">
                        <input type="text" value="Search" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                        <div class="select-box">
                            <select>
                                <option value="All Categories">All Categories</option>
                                <option value="Category Demo 1">Category Demo 1</option>
                                <option value="Category Demo 2">Category Demo 2</option>
                                <option value="Category Demo 3">Category Demo 3</option>
                            </select>
                        </div>
                        <div class="submit-from">
                            <input type="submit" value="">
                        </div>
                    </form>
                </div>
            </div>
            <div class="container">
                <div class="box-product box-has-filter">
                    <div class="title">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-9">
                                <div class="box-tabs">
                                    <ul class="nav nav-tabs list-inline" role="tablist">
                                        <li role="presentation" class="active"><h3><a data-toggle="tab" href="#tab1">best seller</a></h3></li>
                                        <li role="presentation"><h3><a data-toggle="tab" href="#tab2">new arrivals</a></h3></li>
                                        <li role="presentation"><h3><a data-toggle="tab" href="#tab3">popular</a></h3></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-3">
                                <a href="#" class="filter"><i class="fa fa-bars" aria-hidden="true"></i> Filter</a>
                            </div>
                        </div>
                        <div class="dropdown-box">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="drop-list widget-cate">
                                        <div class="title">
                                            <h3>Categories</h3>
                                        </div>
                                        <div class="widget-content">
                                            <div class="list-product">
                                                <ul class="list-inline">
                                                    <li>
                                                        <div class="title clearfix">
                                                            <div class="box-img">
                                                                <img src="{{asset('/smartbuy/images/products/garden/garden-01-2.jpg')}}" alt="" />
                                                            </div>
                                                            <div class="text"><h3>Garden</h3></div>
                                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                                                        </div>
                                                        <ul class="list-inline">
                                                            <li><a href="#">Patio, Lawn & Garden</a></li>
                                                            <li><a href="#">Fine Art</a></li>
                                                            <li><a href="#">Arts, Crafts & Sewing</a></li>
                                                            <li><a href="#">Birdhouse, Birdbaths </a></li>
                                                            <li><a href="#">Garden Accents</a></li>
                                                            <li><a href="#">Garden Books</a></li>
                                                            <li><a href="#">Heirloom Seeds</a></li>
                                                            <li><a href="#">Lanterns</a></li>
                                                            <li><a href="#">Planters, Hangers and Stands</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="title clearfix">
                                                            <div class="box-img">
                                                                <img src="{{asset('/smartbuy/images/products/home/home-11-2.jpg')}}" alt="" />
                                                            </div>
                                                            <div class="text"><h3>Home</h3></div>
                                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                                                        </div>
                                                        <ul class="list-inline">
                                                            <li><a href="#">Chair</a></li>
                                                            <li><a href="#">Lamp</a></li>
                                                            <li><a href="#">Bottle</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="title clearfix">
                                                            <div class="box-img">
                                                                <img src="{{asset('/smartbuy/images/products/tech/tech-09-1.jpg')}}" alt="" />
                                                            </div>
                                                            <div class="text"><h3>Tech</h3></div>
                                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                                                        </div>
                                                        <ul class="list-inline">
                                                            <li><a href="#">Phone</a></li>
                                                            <li><a href="#">Superheater</a></li>
                                                            <li><a href="#">Headphone</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="drop-list widget-price">
                                        <div class="title">
                                            <h3>Price</h3>
                                        </div>
                                        <div class="box-range list-table clearfix">
                                            <div id="amount"></div>
                                            <div id="slider-range"></div>
                                            <ul class="clearfix list-inline">
                                                <li><span>$5.00</span></li>
                                                <li><span>$500.00</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="drop-list widget-color box-color list-table">
                                        <div class="title">
                                            <h3>Color</h3>
                                        </div>
                                        <ul class="list-inline">
                                            <li><a href="#" class="cyan"><i class="fa fa-check" aria-hidden="true"></i>Cyan</a></li>
                                            <li><a href="#" class="blue"><i class="fa fa-check" aria-hidden="true"></i>Blue</a></li>
                                            <li><a href="#" class="pink"><i class="fa fa-check" aria-hidden="true"></i>Pink</a></li>
                                            <li><a href="#" class="blush"><i class="fa fa-check" aria-hidden="true"></i>Blush</a></li>
                                            <li><a href="#" class="eggplant"><i class="fa fa-check" aria-hidden="true"></i>Eggplant</a></li>
                                            <li><a href="#" class="grey"><i class="fa fa-check" aria-hidden="true"></i>Grey</a></li>
                                            <li><a href="#" class="olive"><i class="fa fa-check" aria-hidden="true"></i>Olive</a></li>
                                            <li><a href="#" class="White"><i class="fa fa-check" aria-hidden="true"></i>White</a></li>
                                            <li><a href="#" class="organ"><i class="fa fa-check" aria-hidden="true"></i>Organ</a></li>
                                            <li><a href="#" class="black"><i class="fa fa-check" aria-hidden="true"></i>Black</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="drop-list widget-size">
                                        <div class="title">
                                            <h3>Size</h3>
                                        </div>
                                        <ul class="list-inline">
                                            <li><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="tab1" role="tabpanel" class="tab-pane fade in active">
                            <div class="wrap-product">
                                <div class="row">
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
                        <div id="tab2" role="tabpanel" class="tab-pane fade in">
                            <div class="wrap-product">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="item">
                                            <div class="product-extra-link">
                                                <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                                <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                            </div>
                                            <div class="thumb-product">
                                                <a href="#"><img src="{{asset('/smartbuy/images/products/garden/garden-02.jpg')}}" alt="" /></a>
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
                                                <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-01-3.jpg')}}" alt="" /></a>
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
                                                <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-10-1.jpg')}}" alt="" /></a>
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
                                                <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-12-2.jpg')}}" alt="" /></a>
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
                                                <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-15.jpg')}}" alt="" /></a>
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
                                                <a href="#"><img src="{{asset('/smartbuy/images/products/garden/garden-08-1.jpg')}}" alt="" /></a>
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
                        <div id="tab3" role="tabpanel" class="tab-pane fade in">
                            <div class="wrap-product">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="item">
                                            <div class="product-extra-link">
                                                <a href="quickview.html" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye" aria-hidden="true"></i><span>Quick View</span></a>
                                                <a href="#" class="box-hidden wishlist"><i class="fa fa-heart" aria-hidden="true"></i><span>Add To Wishlist</span></a>
                                            </div>
                                            <div class="thumb-product">
                                                <a href="#"><img src="{{asset('/smartbuy/images/products/garden/garden-15-2.jpg')}}" alt="" /></a>
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
                                                <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-19-2.jpg')}}" alt="" /></a>
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
                                                <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-18-1.jpg')}}" alt="" /></a>
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
                                                <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-17-3.jpg')}}" alt="" /></a>
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
                                                <a href="#"><img src="{{asset('/smartbuy/images/products/home/home-17.jpg')}}" alt="" /></a>
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
                                                <a href="#"><img src="{{asset('/smartbuy/images/products/garden/garden-07.jpg')}}" alt="" /></a>
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
            <div class="box-blog">
                <div class="container">
                    <div class="row">
                        <div class="title">
                            <h2>the blog</h2>
                        </div>
                        <div class="wrap-item" data-navigation="true" data-pagination="false" data-itemscustom="[[0,1],[320,1],[480,1],[768,2],[992,2],[1200,2]]" data-autoplay="false">
                            <div class="wrap-blog">
                                <div class="box-img">
                                    <a href="#"><img src="{{asset('/smartbuy/images/blog/blog_01.jpg')}}" alt="" /></a>
                                </div>
                                <div class="info-box">
                                    <h3><a href="#">9 Home Appliances to make your life a lot easier</a></h3>
                                    <a href="#" class="has-bottom">read more</a>
                                    <ul class="list-inline">
                                        <li>Post by: <a href="#">Admin Fanbong</a></li>
                                        <li><a href="#">5 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="wrap-blog">
                                <div class="box-img">
                                    <a href="#"><img src="{{asset('/smartbuy/images/blog/blog_05.jpg')}}" alt="" /></a>
                                </div>
                                <div class="info-box">
                                    <h3><a href="#">Scandinavian Design Interior Products for Your Home</a></h3>
                                    <a href="#" class="has-bottom">read more</a>
                                    <ul class="list-inline">
                                        <li>Post by: <a href="#">Admin Fanbong</a></li>
                                        <li><a href="#">5 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="wrap-blog">
                                <div class="box-img">
                                    <a href="#"><img src="{{asset('/smartbuy/images/blog/blog_09.jpg')}}" alt="" /></a>
                                </div>
                                <div class="info-box">
                                    <h3><a href="#">9 Home Appliances to make your life a lot easier</a></h3>
                                    <a href="#" class="has-bottom">read more</a>
                                    <ul class="list-inline">
                                        <li>Post by: <a href="#">Admin Fanbong</a></li>
                                        <li><a href="#">5 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    @include('sections.footer')
    <!-- End Footer -->
</div>
@include('sections.js')
</body>

<!-- Mirrored from demo.7uptheme.com/html/smartbuy/home-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Aug 2018 13:32:38 GMT -->
</html>