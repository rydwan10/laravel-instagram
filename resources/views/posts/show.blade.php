@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <div class="row">
                <div style="background-size: cover;" class="col-7">
                    <img src="/storage/{{$post->image}}" class="w-75">
                </div>
                <div class="col-5">
                    <div>
                        <div class="d-flex align-items-center">
                            <div class="pr-3">
                                <img src="/storage/{{$post->user->profile->image}}" class="rounded-circle w-100" style="max-width: 40px;">
                            </div>
                            <div>
                                <div class="font-weight-bold">
                                    <a class="text-dark" style="text-decoration: none;" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}
                                    </a>
                                    |<a href="#" class="pl-2" style="text-decoration: none;">Follow</a>

                                </div>
                            </div>
                        </div>
                        <hr>

                        <p>
                            <span class="font-weight-bold">
                                <a class="text-dark" style="text-decoration: none;" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}
                                </a>
                            </span> {{ $post->caption }}
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
