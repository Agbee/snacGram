@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
    <div class=" row">
            <div class="col-6 offset-3">
                    <div class=" d-flex align-items-center pb-3 pt-3">
                        <div class=" pr-3">
                            <img src="{{$post->user->profile->profileImage()}}" class=" w-100 rounded-circle" style=" max-width: 40px">
                        </div>
                        <div class=" font-weight-bold">

                        <a href="/profile/{{$post->user->id}}"> 
                            <span class=" text-dark">{{$post->user->username}}</span>
                        </a>
                        </div>
                    </div>
                        <a href="/profile/{{$post->user->id}}"><img src="/storage/{{$post->image}}" class=" w-100"></a>

                <div class=" pt-2">
                    <p><span class=" font-weight-bold"><a href="/profile/{{$post->user->id}}"><span class=" text-dark">{{$post->user->username}}</span></a></span> {{$post->caption}}</p>
                </div>
            </div>
           
    @endforeach
</div>
<div class=" row">
    <div class=" col-12">
        {{$posts->links()}}
    </div>
</div>  
@endsection
