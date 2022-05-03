@extends ('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class = "w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div >
                    <!-- https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/300px-No_image_available.svg.png -->
                        <img src="{{ $post->user->profile->profileImage() }}" alt="" class=" rounded-circle w-100" style= "max-width:40px;" >
                    </div>
                    <div style="padding-left:30px;" >
                        <div> <strong>  <a href="/profile/{{ $post->user->id}}" style = "text-decoration:none; ">{{$post ->user->username}}</strong></a> 
                        <a href="#" style = "text-decoration:none; padding-left:5px;"  ><strong> Follow</strong>  </a> 
                        
                    </div>
                    </div>
                </div>
                <hr>


                <p><span> <strong><a href="/profile/{{ $post->user->id}}" style = "text-decoration:none;">{{$post ->user->username}}</strong></a> </span>
                 {{$post ->caption}}</p>
            </div>
        </div>
    </div>
</div>
@endsection