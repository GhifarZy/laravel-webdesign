@extends('layout.admin')
@section('title', 'Dashboard Members')
@section('tag', 'Administrator')
@section('line', 'Administrator')
@section('content')
<center>
  <table id="example" class="display" style="padding: 23px;width:100%">
    <thead>
        <tr>
          <th>No</th>
            <th>Nama</th>
            <th width="255px" >Pekerjaan</th>
            <th>Alamat</th>
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
              <a href="editDataMembers" class="badge badge-info">Update</a>
                <form action="" method="post" class="d-inline">
                  @csrf
                  @method('delete')
                  <button style="border:none;" class="badge badge-danger">Delete</button>
                </form>
          </td>
     </tr>
    </tbody>
  </table>
</center>

@endsection
