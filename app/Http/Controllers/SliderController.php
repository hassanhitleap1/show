<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider= Slider::all();
        return view('slider.index')->with('slider',$slider);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider= new Slider;
       
        $validator = Validator::make($request->all(), [
         'link' => 'required',
         'image'=>'required|image',
         ]);
 
         if ($validator->fails()) {
             return redirect('slider/create')->withErrors($validator)->withInput();
         }
        $name="";
        if ($request->hasFile('image')) {
            if($request->file('image')->isValid()) {
                try {
                    $file = $request->file('image');
                    $name = md5(uniqid(rand(), true)).'.'.$file->getClientOriginalExtension();
                    $file->move('image/slider-image',$name);
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {
                    var_dump($e->getMessage()) ;
                }
            } 
        }
         $slider->link=$request->get('link');
         $slider->image_path='image/slider-image/'.$name;
        $slider->published= ($request->get('published'))? 1:0;
         $slider->save();
        return redirect('slider');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        
        $slider= Slider::find($id);
       
        $validator = Validator::make($request->all(), [
         'link' => 'required',
         'image'=>'required|image',
         ]);
 
         if ($validator->fails()) {
             return redirect('slider/create')->withErrors($validator)->withInput();
         }
        $name="";
        if ($request->hasFile('image')) {
            if($request->file('image')->isValid()) {
                try {
                    $file = $request->file('image');
                    $name = md5(uniqid(rand(), true)).'.'.$file->getClientOriginalExtension();
                    $file->move('image/slider-image',$name);
                    if(File::exists($product->image_path)) {
                        File::delete($product->image_path);
                    }
                    $product->image_path='image/slider-image/'.$name;
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {
                    var_dump($e->getMessage()) ;
                }
            } 
        }
         $slider->link=$request->get('link');
         $slider->image_path='image/slider-image/'.$name;
        $slider->published= ($request->get('published'))? 1:0;
         $slider->save();
        return redirect('slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
