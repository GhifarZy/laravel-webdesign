@extends('layout.admin')
@section('title', 'Dashboard')
@section('tag', 'Administrator')
@section('line', 'Administrator')
@section('content')
<center>
  <table id="example" class="display" style="padding: 23px;width:100%">
    <thead>
        <tr>
          <th>No</th>
            <th>Username</th>
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
              <a href="editMembers" class="badge badge-info">Update</a>
              <a href="addMembers" class="badge badge-success">Tambah Profile</a>
              <form action="" method="post" enctype="multipart/form-data" class="d-inline">
                @csrf
                <button class="badge badge-danger" style="border:none;" >Delete</button>
            </form>
          </td>
     </tr>
     @endforeach
    </tbody>
  </table>
</center>

@endsection
