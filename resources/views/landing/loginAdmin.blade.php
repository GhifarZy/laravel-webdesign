@extends('layout.main')
@section('title', 'login')
@section('tag')
<div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('{{asset ('landing/assets/img/bg2.jpg')}}');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>Welcome</h1>
            <p style="font-size: 20px;" >Administrator</p>
            <div class="container">
               <div class="animate__animated animate__fadeInUp">
                <form action="{{ Route('postLoginAdmin') }}" method="post">
                  @csrf
                  <div class="container">
                    <input type="text" placeholder="Masukkan Username" name="username" required>
                    <input type="password" placeholder="Masukkan Password" name="password" required>
                    <input type="hidden" value="aktif" name="status" required>
                    <input type="hidden" value="level" name="admin" required>
                    <button type="submit">submit</button>
                  </div>
                  </form>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
@endsection