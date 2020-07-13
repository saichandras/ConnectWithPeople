@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row text-center text-lg-left">
            @if(count($posts) === 0)
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="h1">
                            Please Follow To See Posts!!!
                        </div>
                    </div>
                </div>
            @else
                @foreach($posts as $post)
                    <div class="col-lg-3 col-md-4 col-6">
                        <a href="/p/{{$post->id}}" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="/storage/{{$post->image}}" alt="">
                        </a>
                    </div>
                @endforeach
            @endif
        </div>


        <div class="row">
            <div class="col-12 d-flex justify-content-center fixed-bottom pb-3">
                {{$posts->links()}}
            </div>
        </div>

    </div>
@endsection
