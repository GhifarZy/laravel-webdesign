@extends('layout.member')
@section('title', 'Dashbossard Members')
@section('tag', 'Members')
@section('line', 'Members')
@section('content')
<div class="card">
    <button type="button" style="
        margin-top: 6px;
        margin: 0px;
        background-color: #9d3bb0;
        border: none;
    " class="btn btn-primary" data-toggle="modal" data-target="#showForm">
        Add Profile
      </button>
      @error('username')
      @foreach ($profile as $item)
        <div class="alert" style="border-color: red;background-color: #e9ecef;" >
        <strong style="font-weight:bold;color: red;" >Maaf&nbsp;&nbsp;</strong>Profile Sudah Ada, Silakan Update Profile <a href="edit/{{ $item->id }}/Members">di Sini</a>
        </div>
        @endforeach
    @enderror
    <div style="overflow-x:auto;">
          <table id="example" class="display">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th width="255px" >Pekerjaan</th>
                    <th>Alamat</th>
                    <th style="width: 80px" >Action</th> 
                </tr>
            </thead>
            <tbody>
                @foreach ($profile as $item)
              <tr>
       <td style="text-transform:capitalize;" scope="row">{{ $item->nama }}</td>
       <td style="text-transform:capitalize;" scope="row">{{ $item->pekerjaan }}</td>
       <td style="text-transform:capitalize;" scope="row">{{ $item->alamat }}</td>  
       <td>
           <a href="edit/{{ $item->id }}/Members" class="badge badge-info">Update</a>
             <form action="{{ url('deleteMembers/' . $item->id) }}" method="post" class="d-inline">
               @csrf
               @method('delete')
               <button style="border:none;" onclick="return confirm('ingin menghapus data profile ?')" class="badge badge-danger">Delete</button>
             </form>
       </td>      
          </tr>
          @endforeach
            </tbody>
          </table>
        
      </div>
      <!-- Modal -->
      <div class="modal fade" id="showForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Profile</h5>
            </div>
            <div class="modal-body">
                <form action="{{ Route('postMembers') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="" class="form-label">Nama</label>
                    <input type="text" class="form-control @error ('nama') is-invalid @enderror " name="nama">
                    <div class="invalid-feedback">
                      <b>masukkan nama!</b>
                    </div>
                    <label for="" class="form-label">Username</label>
                    <input type="text" value="{{ Auth::User()->username }}" class="form-control @error ('username') is-invalid @enderror " name="username">
                    <div class="invalid-feedback">
                      <b>username sudah dipakai!</b>
                    </div>
                    <label for="" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control @error ('pekerjaan') is-invalid @enderror" name="pekerjaan">
                    <div class="invalid-feedback">
                      <b>masukkan pekerjaan!</b>
                    </div>
                    <label for="" class="form-label">Alamat</label>
                    <input type="text" class="form-control @error ('alamat') is-invalid @enderror " name="alamat">
                    <div class="invalid-feedback">
                      <b>masukkan alamat!</b>
                    </div>
                    <label for="" class="form-label">Gambar</label>
                    <input type="file" class="form-control @error ('gambar') @enderror" name="gambar">
                    <div class="invalid-feedback">
                      <b>masukkan gambar!</b>
                    </div>
                
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" style="background-color: #825ee4;color:white" class="btn btn-primary" >Submit</button>
            </div>
        </form>
        </div>
        </div>
    </div>
  </div>
  @endsection