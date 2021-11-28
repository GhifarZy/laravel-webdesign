@extends('layout.admin')
@section('title', 'Dashboard Members')
@section('tag', 'Administrator')
@section('line', 'Administrator')
@section('content')
<div style="overflow-x:auto;">
  <table id="example" class="display" style="padding: 23px;width:100%">
    <br>
   <div class="container">
    <a href="{{ Route('dataMembersExport') }}">
      <button style="background-color: #825ee4;color:white" class="btn btn-primary">Export</button>
    </a>
      <button style="background-color: #825ee4;color:white" data-toggle="modal" data-target="#import" class="btn btn-primary">Import</button>
   </div>
    <thead>
        <tr>
          <th style="width: 27.125px;" >No</th>
            <th style="width: 400px;" >Nama</th>
            <th >Pekerjaan</th>
            <th>Alamat</th>
            <th>Action</th> 
        </tr>
    </thead>
    <tbody>
      @foreach ($members as $item)
      <tr>
          <td style="text-transform:capitalize;" scope="row">{{ $loop->iteration }}</td>
          <td style="text-transform:capitalize;" scope="row">{{ $item->nama }}</td>
          <td style="text-transform:capitalize;" scope="row">{{ $item->pekerjaan }}</td>
          <td style="text-transform:capitalize;" scope="row">{{ $item->alamat }}</td>  
          <td>
              <a href="editData/{{$item->id}}/Members" class="badge badge-info">Update</a>
                <form action="" method="post" class="d-inline">
                  @csrf
                  @method('delete')
                  <button style="border:none;" class="badge badge-danger">Delete</button>
                </form>
          </td>
     </tr>
     @endforeach
    </tbody>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="import" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Import Data Members</h5>
      </div>
      <div class="modal-body">
          <form action="{{ route('dataMembersImport') }}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="file" class="form-control" name="file" required="required" >         
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" style="background-color: #825ee4;color:white" class="btn btn-primary">Submit</button>
      </div>
  </form>
  </div>
  </div> 

@endsection
