<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Validator;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::paginate(10);
        return view('products.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product= new Product;
       
        $validator = Validator::make($request->all(), [
         'name' => 'required',
         'description'=>'required',
         'link'=>'required',
         'image'=>'required|image',
         'price'=>'required|numeric'
         ]);
 
         if ($validator->fails()) {
             return redirect('products/create')->withErrors($validator)->withInput();
         }
        $name="";
        if ($request->hasFile('image')) {
            if($request->file('image')->isValid()) {
                try {
                    $file = $request->file('image');
                    $name = md5(uniqid(rand(), true)).'.'.$file->getClientOriginalExtension();
                    $file->move('image/prodcut-image',$name);
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {
                    var_dump($e->getMessage()) ;
                }
            } 
        }
         $product->name=$request->get('name');
         $product->description=$request->get('description');
         $product->link=$request->get('link');
         $product->image_path='image/prodcut-image/'.$name;
        $product->at_home= ($request->get('at_home'))? 1:0;
        $product->price=$request->get('price');
         $product->save();
        return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product= Product::find($id);
        return view('products.show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product= Product::find($id);
        return view('products.edit')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product= Product::find($id);
       
        $validator = Validator::make($request->all(), [
         'name' => 'required',
         'description'=>'required',
         'link'=>'required',
         'price'=>'required|numeric'
         ]);
 
         if ($validator->fails()) {
             return redirect('products/'.$id.'/edit')->withErrors($validator)->withInput();
         }
        $name="";
        if ($request->hasFile('image')) {
            if($request->file('image')->isValid()) {
                try {
                    $file = $request->file('image');
                    $name = md5(uniqid(rand(), true)).'.'.$file->getClientOriginalExtension();
                    $file->move('image/prodcut-image',$name);
                    if(File::exists($product->image_path)) {
                        File::delete($product->image_path);
                    }
                    $product->image_path='image/prodcut-image/'.$name;
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {
                    var_dump($e->getMessage()) ;
                }
            } 
        }
         $product->name=$request->get('name');
         $product->description=$request->get('description');
         $product->link=$request->get('link');
        $product->at_home=($request->get('at_home')) ? 1 : 0;
        $product->price=$request->get('price');
         $product->save();
        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        if(File::exists($product->image_path)) {
            File::delete($product->image_path);
        }
        $product->delete();
        return redirect('products');
    }

    /**
     * delete image product
     * 
     * @param int $id
     */
    public function deleteImage($id){
        $product =Product::find($id);
        if(File::exists($product->image_path)) {
            File::delete($product->image_path);
        }
        return 1;
    }
}
