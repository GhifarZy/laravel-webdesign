@extends('layout.admin')
@section('title', 'Dashboard Members')
@section('tag', 'Administrator')
@section('line', 'Administrator')
@section('content')
<form style="padding:32px;" action="" method="" enctype="multipart/form-data">
  @csrf
  <label for="" class="form-label">Nama</label>
  <input type="text" class="form-control" name="nama">
  <label for="" class="form-label">Username</label>
  <input type="text" class="form-control" name="username">
  <label for="" class="form-label">Password</label>
  <input type="password" class="form-control" name="password">
  <label for="" class="form-label">Alamat</label>
  <input type="text" class="form-control" name="alamat">
  <label for="" class="form-label">Pekerjaan</label>
  <input type="text" class="form-control" name="pekerjaan">
  <label for="" class="form-label">Status</label>
  <input type="text" class="form-control" name="status">
<br>
<button type="submit" style="background-color: #825ee4;color:white" class="btn btn-primary">Submit</button>
</form>
<button type="button" style="
  margin-top: 6px;
  margin: 0px;
  background-color: #9d3bb0;
  border: none;
" class="btn btn-primary" data-toggle="modal" data-target="#showFormImage">
  Update Image
</button>
 <!-- Modal -->
 <div class="modal fade" id="showFormImage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">update Image</h5>
      </div>
      <div class="modal-body">
          <form action="" method="post" enctype="multipart/form-data">
              @csrf
              <label for="" class="form-label">Gambar</label>
              <input type="file" class="form-control" name="gambar">
          
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" style="background-color: #825ee4;color:white" class="btn btn-primary">Submit</button>
      </div>
  </form>
  </div>
  </div>
@endsection