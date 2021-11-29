@extends('layout.member')
@section('title', 'Dashboard Members')
@section('tag', 'Members')
@section('line', 'Members')
@section('content')
<form style="padding:32px;" action="{{ url('updateMembers/' . $members->id ) }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="" class="form-label">Nama</label>
    <input type="text" value="{{ $members->nama }}" class="form-control" name="nama">
    <label for="" class="form-label">Username</label>
    <input type="text" value="{{ $members->username }}" class="form-control" name="username">
    <label for="" class="form-label">Pekerjaan</label>
    <input type="text" value="{{ $members->pekerjaan }}" class="form-control" name="pekerjaan">
    <label for="" class="form-label">Alamat</label>
    <input type="text" value="{{ $members->alamat }}" class="form-control" name="alamat">
  <br>
  <button type="submit" style="background-color: #825ee4;color:white" class="btn btn-primary">Update</button>
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
          <form action="{{ url('updateGambarMembers/' . $members->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              <label for="" class="form-label">Gambar</label>
              <input type="file" class="form-control @error ('gambar') is-invalid @enderror " name="gambar">   
              <div class="invalid-feedback">
               <b>masukkan gambar!</b>
              </div>
              <img width="100%" src="{{ asset('gambarMember/' . $members->gambar) }}" alt="">         
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" style="background-color:#825ee4;color:white" class="btn btn-primary">Submit</button>
      </div>
  </form>
  </div>
  </div> 
@endsection