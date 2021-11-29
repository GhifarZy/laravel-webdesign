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
    <input type="text" class="form-control @error ('nama') is-invalid @enderror " name="nama">
    <div class="invalid-feedback">
      <b>masukkan nama!</b>
    </div>
    <label for="" class="form-label">Username</label>
    <input type="text" value="{{ $members->username }}" class="form-control @error ('username') is-invalid  is-invalid @enderror" name="username">
    <div class="invalid-feedback">
      <b>username sudah dipakai!</b>
    </div>
    <label for="" class="form-label">Pekerjaan</label>
    <input type="text" class="form-control @error ('pekerjaan') is-invalid @enderror" name="pekerjaan">
    <div class="invalid-feedback">
      <b>masukkan perkerjaan!</b>
    </div>
    <label for="" class="form-label">Alamat</label>
    <input type="text" class="form-control @error ('alamat') is-invalid @enderror" name="alamat">
    <div class="invalid-feedback">
      <b>masukkan alamat!</b>
    </div>
    <label for="" class="form-label">Gambar</label>
    <input type="file" class="form-control @error ('gambar') is-invalid @enderror" name="gambar">
    <div class="invalid-feedback">
      <b>masukkan gambar!</b>
    </div>
  <br>
  <button type="submit" style="background-color: #825ee4;color:white" class="btn btn-primary">Submit</button>
  </form>

@endsection
