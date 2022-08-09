@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle h-75 w-75">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-baseline">
                <div class="d-flex">
                    <h1>{{$user->username}}</h1>

                     <follow_btn user-id="{{$user->id}}" follows="{{$follows}}"></follow_btn>
                </div>
                @can('update',$user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            @can('update',$user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div style="padding-right: 20px"><strong>{{$postCount}} </strong>posts</div>
                <div style="padding-right: 20px"><strong>{{$followersCount}}</strong>followers</div>
                <div style="padding-right: 20px"><strong>{{$followingCount}}</strong>following</div>
            </div>
            <div class="pt-5 "><strong>{{$user->profile->title}}</strong></div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>

        </div>
    </div>
    <div class="row  pt-5 pb-3">
        @foreach($user->posts as $post)
            <div class="col-4">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
