@extends('layouts.app')

@section('content')

<div class="container">
    <div class="table-responsive">
        <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Link</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  @foreach($products as $product)
                  <tr>
                    <th scope="row">{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->link}}</td>
                        <td>
                            <form action="{{url('products',['id'=>$product->id] )}}" method="post" >
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