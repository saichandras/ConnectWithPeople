@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <form action="">
                    <h2>Search For Friends</h2>
                    <div class="d-flex form-group">
                        <input type="text" name="q" placeholder="Enter Name or Email...!" class="form-control"/>
                        <button type="submit" class="btn btn-primary ml-3">Search</button>
                    </div>
                </form>
                <div class="col-12">
                    <table class="table table-striped text-center">
                        @foreach($data as $user)
                            @if($user->id !== Auth::user()->id)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img style="max-width: 3%" class="w-25 rounded-circle"
                                                 src="{{$user->profile->profileImage()}}" alt="ProPic">
                                            <div class="ml-2"><a href="/profile/{{$user->id}}">{{$user->username}}</a></div>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center fixed-bottom pb-3">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
@endsection
