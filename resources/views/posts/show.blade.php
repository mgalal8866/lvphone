@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col">
        
      </div>
      
    </div>

    
    <div class="row">
 

      <div class="col">
         
        <div class="card" >
            <img class="card-img-top" src="{{URL::asset($post->photo)}}" alt="{{$post->Photo}}">
            <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <p class="card-text">{{$post->content}}</p>
              <p class="card-text">{{ __('ms.Created at :') }} {{$post->created_at->diffForHumans()}}</p>
              <p class="card-text">{{ __('ms.Updated at :') }} {{$post->updated_at->diffForHumans()}}</p>
              <p class="card-text"> By  : {{$post->user->name}}</p>
              <a class="btn btn-success" href="{{ route('posts.index') }}"> {{ __('ms.All Posts') }} </a>
            </div>
          </div>
      
        
      </div>
    </div>
  </div>
@endsection
