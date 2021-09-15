@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col">
        <div class="jumbotron">
            <h1 class="display-10">Create Post</h1>
          </div>
      </div>
      
    </div>
    <div class="row">
@if (count($errors)>0)
<ul>
    @foreach ($errors->all() as $item)
        {{ $item }}
    @endforeach
</ul>
    
@endif

      <div class="col">
        <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
            @csrf
           
            <div class="form-group">
              <label for="exampleFormControlInput1">Title  : </label>
              <input type="text" name="title" class="form-control"  >
            </div>
          
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Content : </label>
              <textarea class="form-control" name="content"  rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">photo  : </label>
                <input type="file" name="photo" class="form-control" >
              </div>
            
            <div class="form-group">
               <button class="btn btn-danger" type="submit">Save</button>
              </div>
          </form>
      </div>
    </div>
  </div>
@endsection
