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
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-extra-link">
                                        <a href="{{$product->link}}" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye fa-2x" aria-hidden="true"></i><span>Quick View</span></a>
                                        <a href="{{$product->link}}" class="box-hidden wishlist"><i class="fa fa-save fa-2x" aria-hidden="true"></i><span>Save to favorite Product</span></a>
                                    </div>
                                    <div class="thumb-product">
                                        <a href="{{$product->link}}"><img src="{{asset($product->image_path)}}" alt="" /></a>
                                    </div>
                                    <div class="name-product">
                                        <h3><a href="{{$product->link}}">Click here to go product</a></h3>
                                    </div>
                                    <div class="box-cart">
                                        <a href="{{$product->link}}" class="cart">Buy product <i class="fa " aria-hidden="true"></i></a>
                                        <ins class="price"><sup>$</sup>{{$product->price}}<sup>.99</sup></ins>
                                    </div>
                                    <div class="customize various" > {{$product->description}}</div>
                                </div>
                        </div>
                        @endforeach
   
        
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