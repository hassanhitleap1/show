@extends('layouts.app')

@section('content')

<div class="container">
    <a class="btn btn-success" href="{{url('slider/create')}}">create</a>
    <div class="table-responsive">
        <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Link</th>
                    <th scope="col">Image</th>
                    <th scope="col">published</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody><?php $i=0;?>
                  @foreach($sliders as $slider)
                  <tr>
                    <th scope="row">{{++$i}}</th>
                        <td>{{$slider->name}}</td>
                        <td>{{$slider->link}}</td>
                        <td><img src="{{asset($slider->image_path)}}" class="rounded" style="width: 180px;"> 
                        </td>
                        <td>{{($slider->published)?'yes':'no'}}</td>
                        <td>
                            <a href="{{url('slider/'.$slider->id.'/edit')}}"><i class="fas fa-edit"></i></a>
                            <a href="{{url('slider/'.$slider->id)}}"><i class="fas fa-eye"></i></a>
                            <form action="{{url('slider',['id'=>$slider->id] )}}" method="post" >
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" value="Submit" class="fas fa-trash-alt"></button>
                            </form>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection