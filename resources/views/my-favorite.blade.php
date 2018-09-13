@extends('layouts.main')

@section('content')
<div class="container">
    <div class="box-product box-has-filter">
        <div class="tab-content">
            <div id="tab1" role="tabpanel" class="tab-pane fade in active">
                <div class="wrap-product">
                    <div class="row" id="products">
                        @foreach ($savedProducts as $savedProduct)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-extra-link">
                                        <a href="{{$savedProduct->product->link}}" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye fa-2x" aria-hidden="true"></i><span>Quick View</span></a>
                                        <a  item="{{$savedProduct->product->id}}" class="box-hidden wishlist saved"><i class="fa fa-save fa-2x" aria-hidden="true" style="{{($savedProduct->product->isSaved != null )?'color: red':''.';'}}"></i><span>Save to favorite Product</span></a>
                                    </div>
                                    <div class="thumb-product">
                                        <a href="{{$savedProduct->product->link}}"><img src="{{asset($savedProduct->product->image_path)}}" alt="" /></a>
                                    </div>
                                    <div class="name-product">
                                        <h3><a href="{{$savedProduct->product->link}}">Click here to go product</a></h3>
                                    </div>
                                    <div class="box-cart">
                                        <a href="{{$savedProduct->product->link}}" class="cart">Buy product <i class="fa " aria-hidden="true"></i></a>
                                        <ins class="price"><sup>$</sup>{{$savedProduct->product->price}}<sup>.99</sup></ins>
                                    </div>
                                    <div class="customize various" > {{$savedProduct->product->description}}</div>
                                </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
           
        </div>
        {{-- <div class="more" id="more" >
            <a href="#"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>More</a>
            <div class="ajax-load text-center" style="display:none">
                <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
            </div>
        </div> --}}

    </div>
</div>


@endsection