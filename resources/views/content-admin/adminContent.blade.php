@extends('layout.admin')
@section('title', 'Dashboard')
@section('tag', 'Administrator')
@section('line', 'Administrator')
@section('content')
<div style="overflow-x:auto;">
  <table id="example" class="display" style="padding: 23px;width:100%">
    <thead>
        <tr>
          <th style="width: 5px;" >No</th>
            <th style="width: 160px;" >Username</th>
            <th>Status</th>
            <th>Level</th>
            <th style="width: 80px" >Action</th> 
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $item)
         <tr>
          <td style="text-transform:capitalize;" scope="row">{{ $loop->iteration }}</td>
          <td style="text-transform:capitalize;" scope="row">{{ $item->username }}</td>
          <td style="text-transform:capitalize;" scope="row">{{ $item->status }}</td>  
          <td style="text-transform:capitalize;" scope="row">{{ $item->level }}</td>  
          <td>
              <a href="adds/{{ $item->id }}/Members" class="badge badge-info">Update</a>
              <a href="add/{{ $item->id }}/Members" class="badge badge-success">Tambah Profile</a>
              <form action="{{ url('deleteUser/' . $item->id ) }}" method="post" enctype="multipart/form-data" class="d-inline">
                @csrf
                @method('delete')
                <button class="badge badge-danger" style="border:none;" onclick="return confirm('ingin menghapus {{ $item->username }} ?')" >Delete</button>
            </form>
          </td>
     </tr>
     @endforeach
    </tbody>
  </table>
</div>

@endsection
