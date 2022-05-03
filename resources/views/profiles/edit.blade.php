@extends('layouts.app')


@section('content')
<div class="container">


<form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
     @csrf 
     @method('PATCH')
<div class="row">
        <div class="col-8 offset-2">

            <div class="row">
                <h1>Edit Profile</h1>
            </div>
    
            <div class="row mb-3">
                <label for="title" class="col-md-4 col-form-label"> Title</label>
                    <input id="title" name = "title"  type="text" class="form-control @error('caption') is-invalid @enderror" caption="title" value="{{ old('title') ?? $user->profile->title}} "  autocomplete="title" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            
            <div class="row mb-3">
                <label for="description" class="col-md-4 col-form-label">Description </label>
                    <input id="description" name = "description"  type="text" class="form-control @error('description') is-invalid @enderror" caption="description" value="{{ old('description') ?? $user->profile->description }}"  autocomplete="description" autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="row mb-3">
                <label for="url" class="col-md-4 col-form-label"> URL</label>
                    <input id="url" name = "url"  type="text" class="form-control @error('url') is-invalid @enderror" caption="url" value="{{ old('url') ?? $user->profile->url }}"  autocomplete="url" autofocus>

                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <!-- image -->
            <div class="row">
            <label for="image"  class="col-md-4 col-form-label">Profile Image</label>
            <input id="image" name = "image" type="file" class="form-control-file" >

            @error('image')
                <strong>{{ $message }}</strong>
            @enderror

            </div>
            

            <div class="row pt-3">
                <button class = "btn btn-primary">
                    Save
                </button>
            </div>
        </div>
</div>

</form>
</div>


@endsection
