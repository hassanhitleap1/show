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
                                        <a  item="{{$savedProduct->product->id}}" class="box-hidden wishlist saved"><i class="fa fa-trash fa-2x" aria-hidden="true" style="color: red;"></i><span>Save to favorite Product</span></a>
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
        <div class="more" id="more" >
            <a href="#"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>More</a>
            <div class="ajax-load text-center" style="display:none">
                <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var page = 1; //track user scroll as page number, right now page number is 1
   $(window).scroll(function () {
       clearTimeout($.data(this, 'scrollTimer'));
       $.data(this, 'scrollTimer', setTimeout(function () {
           page++; //page number increment
           load_more(page); //load content  
   
       }, 250));
   }); 
   $("#more").click(function (e) { 
       e.preventDefault();
           page++; //page number increment
           load_more(page); //load content  
   }); 
   function load_more(page)
   {
     $.ajax({
               url: 'my-favorite?page=' + page,
               type: "get",
               dataType: 'json',
               beforeSend: function()
               {
                   $('.ajax-load').show();
               }
           }).done(function(data){
                var data = jQuery.parseJSON(JSON.stringify(data));
               if(data.savedProducts.data.length == 0){
                   //notify user if nothing to load
                   $('.more').hide();
                   $('.ajax-load').html("No more records!");
                   return;
               }
               printProduct(data.savedProducts.data);
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
                               '<a href="'+value.product.link+'" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye fa-2x" aria-hidden="true"></i><span>Quick View</span></a>\n'+
                               '<a item="'+value.product.id+'" class="box-hidden wishlist saved"><i class="fa fa-trash fa-2x" aria-hidden="true" style="color: red;"></i><span>Save to favorite Product</span></a>\n'+
                           '</div>\n'+
                           '<div class="thumb-product">\n'+
                               '<a href="'+value.link+'"><img src="'+value.product.image_path+'" alt="" /></a>\n'+
                           '</div>\n'+
                           '<div class="name-product">\n'+
                               '<h3><a href="'+value.product.link+'">Click here to go product</a></h3>\n'+
                           '</div>\n'+
                           '<div class="box-cart">\n'+
                               '<a href="'+value.product.link+'" class="cart">Buy product <i class="fa " aria-hidden="true"></i></a>\n'+
                               '<ins class="price"><sup>$</sup>'+value.product.price+'<sup>.99</sup></ins>\n'+
                           '</div>\n'+
                           '<div class="customize various" > '+value.product.description+'</div>\n'+
                       '</div>\n'+
                   '</div>';
       });
        $("#products").append(content);
        
    }
   
   
   </script>

@endsection