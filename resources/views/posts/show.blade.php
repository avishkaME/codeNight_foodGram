@extends('layouts.app')

@section('content')
    <div class="container">
       <div class="row">
            <div class="col-7">
                <img src="/storage/{{$post->image}}" alt="" class="w-100">
            </div>
            <div class="col-5">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="{{ $post->user->profile->profileImage()}}" alt="" class="rounded-circle w-100" style="max-width: 40px;">
                        </div>
                        <div>
                            <div class="font-weight-bold">
                                <a href="/profile/{{$post->user->id}}">
                                    <span class="text-dark">{{$post->user->username}}</span>
                                </a>
                                <a href="#" class="pl-2">Follow</a>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <p>
                        <span class="font-weight-bold">
                            <a href="/profile/{{$post->user->id}}">
                                <span class="text-dark">{{$post->user->username}}</span>
                            </a>
                        </span> {{ $post->caption}}
                    </p>
                    <hr>
                    <h4>Comments</h4>

                </div>
            </div>
       </div>
    </div>
@endsection
