@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row justify-content-center">
                <div class="col-6">
                    <a href="/profile/{{$post->user->id}}"><image src="/storage/{{$post->image}}" class="w-100"></image></a>

                <div class="row">

                    <div class="d-flex" style="margin-bottom: 10px">
                        <p><a href="/profile/{{$post->user->id}}" style="text-decoration:none;color: #1a1e21"><strong>{{$post->user->profile->title}}</strong></a></p>
                        <p style="margin-left: 5px">{{$post->caption}}</p>

                </div>
                </div>
            </div>

            </div>
            @endforeach
            <div class="row justify-content-center ">
                <div class="col-12 ">
                {{$posts->links('pagination::bootstrap-4')}}
                </div>
            </div>
    </div>
@endsection
