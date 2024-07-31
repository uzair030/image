@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>Add Pictures</h5>
                    <a href="{{route('picture.create')}}" class="btn btn-outline-danger">Add Image</a>

                </div>
                <div class="card-bordy">
                <table class="table table-sm table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Image</th>
                                <th scope="col">Created </th>
                                <th scope="col">Action </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($pictures as $picture)
                            <tr>
                                <th scope="row">{{$picture->id}}</th>
                                <td>{{$picture->name}}</td>
                                <td>{{$picture->email}}</td>
                                <td>{{$picture->image}}</td>
                                <td>{{$picture->created_at }}</td>
                                <td>
                                    <div>
                                    <a href="{{route('picture.edit',$picture->id)}}" class="btn btn-primary btn-sm" >Edit </a>
                                    <a href="{{route('picture.delete',$picture->id)}}" class="btn btn-secondary btn-sm">Delete</a>
                                    </div>

                                    
                                </td>
                            </tr>
                            @endforeach
                        
                        </tbody>
                        </table>    
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection

