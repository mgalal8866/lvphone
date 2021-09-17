@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col"> 
        <div class="jumbotron">
            <h1 class="display-10"> All Post</h1>
            
          </div>
      </div>
    </div>
    <a class="btn btn-success" href="{{route('posts.create')}}">Create Post</a>
    <a class="btn btn-danger" href="{{route('posts.trashed')}}">Trash <i class="fas fa-trash-alt "></i></a>
    <div class="row">
        @if ($posts->count() > 0)
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">user</th>
                    <th scope="col">Content</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $i = 1;

                  @endphp
                    @foreach ($posts as $item)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{$item->title}}</td>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->content}}</td>
                        <td>
                           <img src="{{URL::asset($item->photo)}}" alt="{{$item->Photo}}" 
                           class="img-tumbnail" width="100" height="100"> 
                        </td>
                        <td>
                          <a class="text-success" href="{{route('posts.show',['slug'=>$item->slug])}}">
                            <i class="fas fa-2x fa-eye"></i></a>  
                         
                         @if ($item->user_id == Auth::id())
                         <a class="text-danger" href="{{route('posts.destroy',['id'=>$item->id])}}">
                          <i class="fas fa-2x fa-trash-alt"></i></a>
                          <a href="{{route('posts.edit',['id'=>$item->id])}}">
                            <i class="fas fa-2x fa-pen-square"></i></a>
                      
                         @endif
                        
                         </td>
                      </tr> 
                    @endforeach
                  
       
                </tbody>
              </table>
        </div>  
        @else
        <div class="alert alert-danger" role="alert">
           No Posts .. 
          </div>
        @endif

     
    </div>
  </div>
@endsection
