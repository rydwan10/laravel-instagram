@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5 ">
           <img src="/storage/{{ $user->profile->image }}" class="w-100 rounded-circle">
       </div>
       <div class="col-9 pt-5">
           <div class="d-flex justify-content-between align-items-baseline">
               <h1>{{ $user->username }}</h1>
               @can('update', $user->profile)
               <a href="/p/create" class="btn btn-primary">Add New Post</a>
               @endcan
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }} </strong>posts</div>
                <div class="pr-5"><strong>315 </strong>followers</div>
                <div class="pr-5"><strong>401 </strong>following</div>
            </div>

            @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="pt-4 font-weight-bold">
                {{ $user->profile->title }}
           </div>
           <div>
                {{ $user->profile->description }}
           </div>
           <div>
               <a href="http://{{ $user->profile->url }}">{{ $user->profile->url }}</a>
           </div>
       </div>
   </div>
   <div class="row pt-5">
     @foreach ($user->posts as $post)    
     <div class="col-4 pb-4">
         <a href="/p/{{ $post->id }}">
             <img class="w-100" src="/storage/{{ $post->image }}" />
         </a>
     </div>
     @endforeach
     
   </div>
</div>
@endsection
