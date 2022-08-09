@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="post">
            @csrf
<div class="row">
    <div class="col-8 offset-2">
        <div class="row">
            <h1>Add New Post</h1>
        </div>
        <div class="row mb-3">
            <label for="caption" class="col-md-4 col-form-label ">Post Caption</label>

                <input id="caption" type="text" class="form-control" name="caption">

                @error('caption')
                    <strong class="alert-danger">{{ $message }}</strong>
                @enderror
        </div>


        <div class="row">
            <label for="image" class="col-md-4 col-form-label ">Post Image</label>

            <input id="image" type="file" class="form-control-file" name="image"  >
            @error('image')
                    <strong class="alert-danger">{{ $message }}</strong>
            @enderror
        </div>
        <div class="row pt-4">
            <button class="btn btn-primary " type="submit">Add New Post</button>
        </div>
    </div>

</div>
        </form>
    </div>
@endsection
