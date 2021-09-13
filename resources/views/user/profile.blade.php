{{-- @extends('layout.layout')
@section('title', 'New spend')
@section('content')
@section('sidebar') --}}
@extends('layouts.app')
@section('content')
@php
 $genderarat= ['male','female']   
@endphp
@if(count($errors)>0)
@foreach ($errors->all() as $item)
    <div class="alert - alert-danger" role="alert">
    {{$item}}
    </div>
@endforeach
@endif
<div class="container" style="padding-top: 8%">
<form method="POST" action="{{route('profile.update')}}">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" class="form-control" name="name"  value="{{$user->name}}"> 
  </div> 
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">province</label>
      <input type="text" class="form-control" name="province"  value="{{$user->profile->province}}"> 
    </div> 
    
    <div class="mb-3">
      <label for="exampleInputEmail12" class="form-label">gender</label>
      <select class="form-control" name="gender">
        @foreach ($genderarat as $item)
        <option value="{{$item}}" {{($user->profile->gender == $item ) ? 'selected':''}}>{{$item}}</option>
        @endforeach
 
      </select>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail3" class="form-label">bio</label>
      <input type="text" class="form-control" name="bio" id value="{{$user->profile->bio}}"> 
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail4" class="form-label">facebook</label>
      <input type="text" class="form-control" name="facebook"  value="{{$user->profile->facebook}}"> 
    </div>
    <button type="submit" class="btn btn-success">save</button>
  </form>
</div>
@endsection