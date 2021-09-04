@extends('layout.layout');
@section('title', 'Page Title')
@section('content')
@section('sidebar')
    @parent
    
@section('sjs')
@if ($msg = Session::get('success'))
 <script>
toastr.success("{!! $msg !!}");
</script>
@endif
@endsection


    <p>This is appended to the master sidebar.</p>
@endsection

  <a href="{{route('msaref.create')}}" class="btn btn-success btn-lg">Edit</a>
                
<table class="table table-dark table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>masrof</th>
                 <th>type</th>
                 <th>Edit</th>
                 <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
            @foreach ($msaref as $item)
               <tr>
                <td>{{ $item->masrof}}</td>
                <td>{{ $item->type }}</td>
                <td>
                <a href="{{route('msaref.edit', $item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                </td>
                <td>
                  <form action="{{route('msaref.destroy', $item->id)}}" method="POST">
                 @csrf
                 @method('DELETE')
                
               <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
              </form>
                </td>
                </tr>
                @endforeach
                        </tbody>
                    </table>
                    @endsection
                    
