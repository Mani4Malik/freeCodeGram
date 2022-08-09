@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <image src="/storage/{{$post->image}}" class="w-100"></image>
            </div>
            <div class="col-4">
                <div class="d-flex">
                    <image src="{{$post->user->profile->profileImage()}}" style="width: 40px" class="rounded-circle"></image>
                <div style="margin-left: 10px">
                    <p><a href="/profile/{{$post->user->id}}" style="text-decoration:none;color: #1a1e21"><strong>{{$post->user->profile->title}}</strong></a></p>
                </div>
                    <p style="margin-left: 10px"><strong><a href="#" style="text-decoration:none">Follow</a></strong></p>

                </div>
                <hr>
                <div class="d-flex">
                <p><a href="/profile/{{$post->user->id}}" style="text-decoration:none;color: #1a1e21"><strong>{{$post->user->profile->title}}</strong></a></p>
                <p style="margin-left: 5px">{{$post->caption}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
