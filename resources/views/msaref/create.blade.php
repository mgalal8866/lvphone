@extends('layout.layout');
@section('title', 'New spend')
@section('content')
@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection


<form action="{{route('msaref.store')}}" method="POST">
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Span</label>
    <input type="text" name="masrof" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Span">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Type</label>
    <input type="text" name="type" class="form-control" id="exampleInputPassword1" placeholder="Type">
  </div>
  
  <button type="submit" class="btn btn-primary">Save</button>
</form>


@endsection

