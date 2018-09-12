<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SavedProduct;
use App\Product;
use App\Slider;
use App\Category;
use Validator;
use Session;
use App\Contact;


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
        if ($request->ajax()) {
            if($request->category !=''){
                $category = Category::where('name', $request->category)->first();
                if(!empty($category)){
                    $products = Product::where('category', $category->id)->paginate(10); 
                }
            }else{
                $products = Product::paginate(10);
            }
            return response()->json(['products' => $products]);
        }
        $imagesSlider=Slider::where('published',Slider::Published)->get();
        if($request->category=='home' ){
            $products=Product::paginate(10); 
        }else{
            if($request->category !=''){
                $category = Category::where('name', $request->category)->first();
                if(!empty($category)){
                    $products = Product::where('category', $category->id)->paginate(10); 
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


    public function contact(){
        return view('contact');
    }


    public function contactSaved(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'email|required',
            'subject' => 'required',
            'message' => 'required',
            'image'=>'image'
            ]);

            if ($validator->fails()) {
                return redirect('/contact')->withErrors($validator)->withInput();
            }
            $model = new Contact;
            $name="";
            if ($request->hasFile('image')) {
                if($request->file('image')->isValid()) {
                    try {
                        $file = $request->file('image');
                        $name = md5(uniqid(rand(), true)).'.'.$file->getClientOriginalExtension();
                        $file->move('image/contact-mage',$name);
                        $model->image_path='image/contact-mage'.$name;
                    } catch (Illuminate\Filesystem\FileNotFoundException $e) {
                        var_dump($e->getMessage()) ;
                    }
                } 
            }

            
            $model->name=$request->name;
            $model->email=$request->email;
            $model->subject=$request->subject;
            $model->message=$request->message;
            $model->save();
            Session::put('recorud', 'sucessfully send message');
        return redirect('contact');
    }
}
