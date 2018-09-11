@extends('layouts.main')

@section('content')
<div class="box-slider">
    <div class="wrap-item" data-navigation="true" data-pagination="true" data-itemscustom="[[0,1]]" data-autoplay="false" data-transition="fade">
        @foreach($imagesSlider as $image)
        <div class="wrap-slide">
            <div class="box-img">
                <a href="{{$image->link}}"><img src="{{asset($image->image_path)}}" alt="" /></a>
            </div>
            <div class="box-info-slide">
                <div class="container">
                    <div class="adv-info-slide">
                        <!-- <h2 class="animated" data-animated="fadeInLeftBig">good shop</h2>
                        <h3 class="animated" data-animated="flipInX">up to 50% off</h3> -->
                        <a href="{{$image->link}}" class="animated has-bottom" data-animated="bounceInLeft">shop now</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container">
    <div class="box-product box-has-filter">
     
        <div class="tab-content">
            <div id="tab1" role="tabpanel" class="tab-pane fade in active">
                <div class="wrap-product">
                    <div class="row" id="products">
                        @foreach ($products as $product)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-extra-link">
                                        <a href="{{$product->link}}" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye fa-2x" aria-hidden="true"></i><span>Quick View</span></a>
                                        <a  item="{{$product->id}}" class="box-hidden wishlist saved"><i class="fa fa-save fa-2x" aria-hidden="true" style="{{($product->isSaved != null )?'color: red':''.';'}}"></i><span>Save to favorite Product</span></a>
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
        <div class="more" id="more" category="{{!empty(@$_GET['category'])?$_GET['category']:''}}">
            <a href="#"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>More</a>
            <div class="ajax-load text-center" style="display:none">
                <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
 var page = 1; //track user scroll as page number, right now page number is 1
var category=$("#more").attr('category');
$(window).scroll(function () {
    clearTimeout($.data(this, 'scrollTimer'));
    $.data(this, 'scrollTimer', setTimeout(function () {
        page++; //page number increment
        load_more(page); //load content  

    }, 250));
}); 
$(".saved").click(function (e) { 
    e.preventDefault();
    var item=$(this).attr('item');
     $.ajax({
            url: 'saved',
            type: "get",
            data:{item:item},
            dataType: 'json',
            beforeSend: function()
            {
                $('.ajax-load').show();
            }
        }).done(function(data){
            $('.ajax-load').hide(); //hide loading animation once data is received 
            if(data.saved==1){
                alert('saved');  
               
            }else if(data.saved==2){
                alert('UnSaved'); 
            }else{
                alert('must be login'); 
            }
             
        }).fail(function(jqXHR, ajaxOptions, thrownError){
              alert('No response from server');
        });
});  
$("#more").click(function (e) { 
    e.preventDefault();
        page++; //page number increment
        load_more(page); //load content  
}); 
function load_more(page)
{
  $.ajax({
            url: '?page=' + page,
            type: "get",
            data:{category:category},
            dataType: 'json',
            beforeSend: function()
            {
                $('.ajax-load').show();
            }
        }).done(function(data){
             var data = jQuery.parseJSON(JSON.stringify(data));
            if(data.products.data.length == 0){
                //notify user if nothing to load
                $('.more').hide();
                $('.ajax-load').html("No more records!");
                return;
            }
            printProduct(data.products.data);
            $('.ajax-load').hide(); //hide loading animation once data is received
            // $("#results").append(data); //append data into #results element 
                 
        }).fail(function(jqXHR, ajaxOptions, thrownError){
              alert('No response from server');
        });
 }

 function printProduct(data) {
     var content='';
    $.each(data, function( index, value ) {
        content+='<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">\n'+
                    '<div class="item">\n'+
                        '<div class="product-extra-link">\n'+
                            '<a href="'+value.link+'" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye fa-2x" aria-hidden="true"></i><span>Quick View</span></a>\n'+
                            '<a item="'+value.id+'" class="box-hidden wishlist saved"><i class="fa fa-save fa-2x" aria-hidden="true"></i><span>Save to favorite Product</span></a>\n'+
                        '</div>\n'+
                        '<div class="thumb-product">\n'+
                            '<a href="'+value.link+'"><img src="'+value.image_path+'" alt="" /></a>\n'+
                        '</div>\n'+
                        '<div class="name-product">\n'+
                            '<h3><a href="'+value.link+'">Click here to go product</a></h3>\n'+
                        '</div>\n'+
                        '<div class="box-cart">\n'+
                            '<a href="'+value.link+'" class="cart">Buy product <i class="fa " aria-hidden="true"></i></a>\n'+
                            '<ins class="price"><sup>$</sup>'+value.price+'<sup>.99</sup></ins>\n'+
                        '</div>\n'+
                        '<div class="customize various" > '+value.description+'</div>\n'+
                    '</div>\n'+
                '</div>';
    });
     $("#products").append(content);
     
 }


</script>

@endsection