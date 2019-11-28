@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pb-2">
        <h3>Connect people</h3>
        <hr>
    </div>
    <div class="row">
        <h3>All users</h3>
        <hr>
        <div class="col-12">
            <ul>
                <div class="row bg-light py-3">
                    @foreach ($users as $user)
                    <div class="col-2 text-center justify-content-center pt-4">
                        <a href="/profile/{{ $user->id }}">
                            <img src="{{ $user->profile->profileImage() }}" alt="..." class="rounded-circle w-75">
                        </a>
                    </div>
    
                    <div class="col-10">
                        <div class="card w-75 mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><a href="/profile/{{ $user->id }}">{{ $user->name }} </a></h5>
                                <div>
                                    {{-- <p class="card-text"><strong>Department: </strong>{{ $user->department }}</p> --}}
                                </div>
                                <p class="card-text"><i class="fas fa-envelope"></i> {{ $user->email }}</p>
                                <follow-button></follow-button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
    
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-10 d-flex justify-content-center pt-3">
            {{ $users->links()}}
        </div>
    </div>
</div>
@endsection