@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col"> 
        <div class="jumbotron">
            <h1 class="display-10"> All Tags</h1>
            
          </div>
      </div>
    </div>
    <a class="btn btn-success" href="{{route('tags.create')}}">Create Tag</a>
     
    <div class="row">
        @if ($tags->count() > 0)
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tag</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $i = 1;

                  @endphp
                    @foreach ($tags as $item)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{$item->tag}}</td>                
                        <td>
                           <a href="{{route('tags.edit',['id'=>$item->id])}}">
                            <i class="fas fa-2x fa-pen-square"></i></a>
                         
                         <a class="text-danger" href="{{route('tags.destroy',['id'=>$item->id])}}">
                            <i class="fas fa-2x fa-trash-alt"></i></a>
                         </td>
                      </tr> 
                    @endforeach
                  
       
                </tbody>
              </table>
        </div>  
        @else
        <div class="alert alert-danger" role="alert">
           No Tags .. 
          </div>
        @endif

     
    </div>
  </div>
@endsection
