@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5 text-center">
                <img
                    src="{{$user->profile->profileImage()}}"
                    alt="ProPic" class="rounded-circle img-thumbnail w-100">

                @can('update', $user->profile)
                    <a class="btn btn-link mt-2" href="/profile/{{$user->id}}/edit">Edit Profile</a>
                @endcan

            </div>

            <div class="col-9 mt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center mb-3">
                        <div class="h1">{{$user -> username}}</div>
                        <follow-button user_id = {{$user->id}} follows= {{$follows}}></follow-button>
                    </div>

                    @can('update', $user->profile)
                        <a class="btn btn-outline-primary" href="/p/create" role="button">Add New Post</a>
                    @endcan

                </div>

                <div class="d-flex">
                    <div class="pr-5"><strong>{{$postsCount}}</strong> posts</div>
                    <div class="pr-5"><strong>{{$followersCount}}</strong> followers</div>
                    <div class="pr-5"><strong>{{$followingCount}}</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">
                    {{$user->profile->title}}
                </div>
                <div>
                    {{$user->profile->description}}
                </div>
                <div class="pt-2">
                    <a href="#">{{$user->profile->url}}</a>
                </div>
            </div>
        </div>

        <div class="row pt-5">

            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{$post->id}}">
                        <img src="/storage/{{$post->image}}" class="w-100">
                    </a>
                </div>
            @endforeach

        </div>


    </div>
@endsection
