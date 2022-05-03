@extends('layouts.app')

@section('content')
<div class="container">


<form action="/p" enctype="multipart/form-data" method="post">
     @csrf 
<div class="row">
        <div class="col-8 offset-2">

            <div class="row">
                <h1>Add Post</h1>
            </div>

            <div class="row mb-3">
                <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                    <input id="caption" name = "caption"  type="text" class="form-control @error('caption') is-invalid @enderror" caption="caption" value="{{ old('caption') }}"  autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
             
            </div>
            
            <div class="row">
            <label for="image"  class="col-md-4 col-form-label">Upload Image</label>
            <input id="image" name = "image" type="file" class="form-control-file" >

            @error('image')
                            <strong>{{ $message }}</strong>
                    @enderror

            </div>
            

            <div class="row pt-3">
                <button class = "btn btn-primary">
                    Post
                </button>
            </div>
        </div>
</div>

</form>
</div>


@endsection
