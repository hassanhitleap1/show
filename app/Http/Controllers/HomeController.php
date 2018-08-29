<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SavedProduct;
use App\Product;


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
        
        if($request->category=='home'){
            $products=Product::paginate(10); 
        }
        return view('index')->with('products',$products);
    }
    


    public function savedProduct($productId){
        $model= new SavedProduct;
        $model->product_id=$productId;
        $model->user_id=Auth::user()->id;
        $model-save();
    }
}
