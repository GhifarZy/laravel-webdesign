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
            <th>Nama</th>
            <th width="255px" >Username</th>
            <th>Status</th>
            <th style="width: 80px" >Action</th> 
        </tr>
    </thead>
    <tbody>
      <tr>
          <td style="text-transform:capitalize;" scope="row">test</td>
          <td style="text-transform:capitalize;" scope="row">test</td>
          <td style="text-transform:capitalize;" scope="row">test</td>
          <td style="text-transform:capitalize;" scope="row">test</td>  
          <td>
              <a href="editMembers" class="badge badge-info">Update</a>
              <a href="addMembers" class="badge badge-success">Tambah Profile</a>
              <form action="" method="post" enctype="multipart/form-data" class="d-inline">
                @csrf
                <button class="badge badge-danger" style="border:none;" >Delete</button>
            </form>
          </td>
     </tr>
    </tbody>
  </table>
</center>

@endsection
