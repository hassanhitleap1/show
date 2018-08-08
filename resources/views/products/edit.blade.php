@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">category</div>
                <div class="card-body">
                    <form method="post" action="{{ url('products/'.$product->id) }}" aria-label="products"  enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="put" />
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  value="{{$product->name}}">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">Description</label>
    
                                <div class="col-md-6">
                                <textarea rows="4" cols="50" id="description"  class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" > {{$product->description }}
                                </textarea>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">Link</label>
    
                                <div class="col-md-6">
                                <input id="link" type="text" class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link" value="{{$product->link}}">
    
                                    @if ($errors->has('link'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('link') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div> 
                        <div class="form-group row">
                                <label for="file" class="col-sm-4 col-form-label text-md-right">Image</label>
    
                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image"  >
    
                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>                                                                        
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
