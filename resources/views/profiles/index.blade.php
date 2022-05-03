@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3">
            <img src="{{ $user->profile->profileImage() }}" style = "border-radius:50%;"   alt="" class = "p-5 w-100">
       </div>
       <div class="col-9 pt-5">
            <div class = "d-flex justify-content-between align-items-baseline">
                
            <div class = "d-flex pb-3">
                    <h3>{{ $user->username}}</h3>
                    <follow-button user-id ="{{ $user->id}}" follows="{{ $follows}}"></follow-button>
            </div>
    


                @can('update', $user->profile)
                <a href="/p/create">Create Post</a>
       

                @endcan
                <!-- <a href="/p/create">Create Post</a> -->


            </div>
 
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profle</a>

            @endcan

            <div class = "d-flex">
                <div style ="padding:auto;"><strong>{{$postCount}}</strong>  posts  </div>
                <div style=" padding-left:50px;"><strong>{{ $followersCount}}</strong>  followers</div>
                <div style=" padding-left:50px;"><strong>{{ $followingCount}}</strong>  following</div>
            </div>
            <div class = "pt-4 "><strong>{{ $user->profile->title }}</strong></div>
            <div> {{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'No Link'}}</a></div>

            

       </div>

       <div class="row pt-5">

       @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                  <img src="/storage/{{$post -> image}}" alt="" class = "w-100">
                </a>
            </div>
       @endforeach


        </div>
   </div>

</div>


@endsection
