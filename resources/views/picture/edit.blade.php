@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>Create Products</h5>
                    <a href="{{ route('home') }}" class="btn btn-outline-danger">Back</a>
                </div>
                <div class="card-body">
                    <h2>Upload a File</h2>
                    <form action="{{route('picture.update',$picture->id) }}" method="post"s>
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" value="{{$picture->name}}" id="name" name="name" >
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control"  value="{{$picture->email}}" id="email" name="email" >
                        </div>
                        <div class="form-group">
                            <label for="file">Choose a file:</label>
                            <input type="file" class="form-control-file" value="{{$picture->image}}"  id="file" name="image" >
                        </div>
                        <button type="submit" class="btn btn-outline-dark mt-3">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
