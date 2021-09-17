@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col">
        <div class="jumbotron">
            <h1 class="display-10">Edit Post</h1>
          </div>
      </div>
      
    </div>

    <a class="btn btn-success" href="{{ route('posts.index') }}">Show Post</a>
    <div class="row">
@if (count($errors)>0)
<ul>
    @foreach ($errors->all() as $item)
        {{ $item }}
    @endforeach
</ul>
    
@endif

      <div class="col">
        <form method="POST" action="{{route('posts.update',['id'=> $post->id])}}" enctype="multipart/form-data">
            @csrf
           
            <div class="form-group">
              <label for="exampleFormControlInput1">Title  : </label>
              <input type="text" value="{{ $post->title }}" name="title" class="form-control"  >
            </div>
            <div class="form-group">
              @foreach ( $tags as $item)
              <input type="checkbox" name="tags[]"  value="{{ $item->id }}"
              
              @foreach ($post->tag as $item2)
                @if($item->id ==  $item2->id){
                  checked

               @endif

              @endforeach
              
              >
              
              
              <label for="">{{ $item->tag }}</label> 
              @endforeach
            
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Content : </label>
              <textarea class="form-control" name="content" rows="3">{{ $post->content }}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">photo  : </label>
                <input type="file" name="photo" class="form-control" >
              </div>
            
            <div class="form-group">
               <button class="btn btn-danger" type="submit">Update</button>
              </div>
          </form>
      </div>
    </div>
  </div>
@endsection
