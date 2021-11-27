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
    <label for="" class="form-label">Status</label>
    <input type="text" class="form-control" name="status">
  <br>
  <button type="submit" style="background-color: #825ee4;color:white" class="btn btn-primary">Submit</button>
  </form>  
@endsection