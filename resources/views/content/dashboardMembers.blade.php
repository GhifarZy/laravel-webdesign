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
      <center>
        <table id="example" class="display" style="width:100%">
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
         <a href="editDataMembers" class="badge badge-info">Update</a>
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
      </center>
  </div>
  @endsection