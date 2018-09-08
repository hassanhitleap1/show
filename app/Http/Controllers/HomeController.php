<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SavedProduct;
use App\Product;
use App\Slider;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products=Product::paginate(10); 
        $imagesSlider=Slider::where('published',Slider::Published)->get();
        if($request->category=='home' ){
            $products=Product::paginate(10); 
        }else{
            
        }
        
        return view('index')->with('products',$products)
                    ->with('imagesSlider',$imagesSlider);
    }
    


    public function savedProduct($productId){
        $model= new SavedProduct;
        $model->product_id=$productId;
        $model->user_id=Auth::user()->id;
        $model-save();
    }
}
