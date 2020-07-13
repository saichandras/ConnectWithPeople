@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-7">
                <img src="/storage/{{$post->image}}" alt="Your Opened Post" class="w-75 float-right">
            </div>
            <div class="col-5">
                <div>
                    <div>
                        <div class="d-flex align-items-center">
                            <img src="{{$post->user->profile->profileImage()}}" alt="profile-pic"
                                 class="rounded-circle" style="max-width: 10%">
                            <div class="ml-3 font-weight-bold">
                                <a href="/profile/{{$post->user->id}}" class="text-decoration-none">
                                    <span class="text-dark">
                                        {{$post->user->username}}
                                    </span>
                                </a>
                            </div>
{{--                            <div class="ml-2">
                                <span>&#9679;</span>
                                <a href="#">Follow</a>
                            </div>--}}
                        </div>
                    </div>
                    <hr>
                    <p>
                        <span class="mr-2 font-weight-bold">
                            <a href="/profile/{{$post->user->id}}" class="text-decoration-none">
                                <span class="text-dark">
                                    {{$post->user->username}}
                                </span>
                            </a>
                        </span>{{$post->caption}}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
