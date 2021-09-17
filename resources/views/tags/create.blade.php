@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col">
        <div class="jumbotron">
            <h1 class="display-10">Create Tags</h1>
            <a class="btn btn-success" href="{{ route('tags.index') }}">Show Tags</a>
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
        <form method="POST" action="{{route('tags.store')}}"  >
            @csrf
           
            <div class="form-group">
              <label for="exampleFormControlInput1">Name  : </label>
              <input type="text" name="tag" class="form-control"  >
            </div>
          
            <div class="form-group">
               <button class="btn btn-danger" type="submit">Save</button>
              </div>
          </form>
      </div>
    </div>
  </div>
@endsection
