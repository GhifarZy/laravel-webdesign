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
  <form style="padding:32px;" action="{{ url('updateMemberInAdmin/' . $members->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="" class="form-label">Username</label>
    <input type="text" value="{{ $members->username }}" class="form-control @error ('username') is-invalid  @enderror" name="username">
    <label for="" class="form-label">Status</label>
    {{-- <input type="text" value="{{ $members->status }}" class="form-control" name="status"> --}}
    <select name="status" class="form-control" id="">
      <option value="{{ $members->status }}">{{ $members->status }}</option>
      <option value="aktif">aktif</option>
      <option value="nonaktif">nonaktif</option>
    </select>
    <label for="" class="form-label">level</label>
    <input type="text" value="{{ $members->level }}" class="form-control" name="level">
  <br>
  <button type="submit" style="background-color: #825ee4;color:white" class="btn btn-primary">update</button>
  </form>
  <button type="button" style="
  margin-top: 6px;
  margin: 0px;
  background-color: #9d3bb0;
  border: none;
" class="btn btn-primary" data-toggle="modal" data-target="#showFormImage">
  Change Password
</button>
 <!-- Modal -->
 <div class="modal fade" id="showFormImage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
      </div>
      <div class="modal-body">
          <form action="{{ url('changePasswordBy/' . $members->id) }}" method="post">
              @csrf
              <label for="" class="form-label">Password</label>
              <input type="password" value="{{ $members->password }}" class="form-control" name="password">         
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" style="background-color: #825ee4;color:white" class="btn btn-primary">Submit</button>
      </div>
  </form>
  </div>
  </div> 
@endsection
