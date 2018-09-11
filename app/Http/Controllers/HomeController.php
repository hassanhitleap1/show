<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SavedProduct;
use App\Product;
use App\Slider;
use App\Category;



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
        $products=Product::orderBy('id', 'desc')->paginate(10);
        if ($request->ajax()) {
            if($request->category !=''){
                $category = Category::where('name', $request->category)->first();
                if(!empty($category)){
                    $products = Product::where('category', $category->id)
                    ->orderBy('id', 'desc')->paginate(10); 
                }
            }else{
                $products = Product::orderBy('id', 'desc')->paginate(10);
            }
            return response()->json(['products' => $products]);
        }
        $imagesSlider=Slider::where('published',Slider::Published)->get();
        if($request->category=='home' ){
            $products=Product::orderBy('id', 'desc')->paginate(10); 
        }else{
            if($request->category !=''){
                $category = Category::where('name', $request->category)->first();
                if(!empty($category)){
                    $products = Product::where('category', $category->id)
                        ->orderBy('id', 'desc')->paginate(10); 
                }
            }
           
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
