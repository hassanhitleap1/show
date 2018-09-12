@extends('layouts.app')

@section('content')

<div class="container">
    <a class="btn btn-success" href="{{url('/admin/products/create')}}">create</a>
    <div class="table-responsive">
        <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">subject</th>
                    <th scope="col">messages</th>
                    <th scope="col">Image</th>
                    <th scope="col">resolved</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody><?php $i=0;?>
                  @foreach($contacts as $contact)
                  <tr>
                    <th scope="row">{{++$i}}</th>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->subject}}</td>
                        <td>{{$contact->messages}}</td>
                        <td>{{($contact->resolved)?'yes':'no'}}</td>
                        <td><img src="{{asset($contact->image_path)}}" class="rounded" style="width: 180px;"> 
                        </td>

                        <td>
                            <a href="{{url('/admin/contacts/'.$contact->id.'/edit')}}"><i class="fas fa-edit"></i></a>
                            <a href="{{url('/admin/contacts/'.$contact->id)}}"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
        {{$contacts->links()}}
</div>
@endsection