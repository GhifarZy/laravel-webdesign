@extends('layout.admin')
@section('title', 'Dashboard Members')
@section('tag', 'Administrator')
@section('line', 'Administrator')
@section('content')
  @error('username')
      <div class="alert" style="border-color: red;background-color: #e9ecef;" >
        <strong style="font-weight:bold;color: red;" >Maaf&nbsp;&nbsp;</strong>Profile Sudah Ada, Cek Profile Members <a href="{{ url('dashboardMembers') }}">di Sini</a>
    </div>
  @enderror
  <form style="padding:32px;" action="{{ Route('postMembersInAdmin') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama">
    <label for="" class="form-label">Username</label>
    <input type="text" value="{{ $members->username }}" class="form-control @error ('username') is-invalid  @enderror" name="username">
    <label for="" class="form-label">Pekerjaan</label>
    <input type="text" class="form-control" name="pekerjaan">
    <label for="" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat">
    <label for="" class="form-label">Gambar</label>
    <input type="file" class="form-control" name="gambar">
  <br>
  <button type="submit" style="background-color: #825ee4;color:white" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
