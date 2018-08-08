<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Validator;

class ProfuctController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
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
         'link'=>'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
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
                    $product->image_path='image/prodcut-image/'.$name;
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {
                    var_dump($e->getMessage()) ;
                }
            } 
        }
         $product->name=$request->get('name');
         $product->description=$request->get('description');
         $product->link=$request->get('link');
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
        Product::find($id)->delete();
        return redirect('index');
    }
}
