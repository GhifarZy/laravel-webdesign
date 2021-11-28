@extends('layout.main')
@section('title', 'Dashboard')
@section('tag')
    <div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('{{asset ('landing/assets/img/bg2.jpg')}}');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>Welcome</h1>
            <p style="font-size: 20px;" >Pencarian Anggota</p>
            <div class="container">
               <div class="animate__animated animate__fadeInUp">
                <form action="{{ Route('cariData') }}" method="get">
                  <div class="container">
                    <input type="text" placeholder="Cari Berdasarkan ID Members" name="cari" required>
                    <button type="submit">Cari</button>
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
@section('content')
<div class="main main-raised">
    <div class="section section-basic">
      <div class="container">
        <div class="title">
        </div>
      <div class="container">
        <center>
            <div class="row">
                @foreach ($members as $item)
                <div class="col-lg-3">
                    <div class="card" style="width: 17rem;">
                        <center><img style=" width: 100px;
                            height: 100px;
                            border-radius: 50%;" class="card-img-top" src="{{ asset('gambarMember/' . $item->gambar) }}" alt="">  
                            </center> 
                            <p style="text-align: center" >Id Members <b>{{ $item->id }}</b></p>
                        <div class="card-body">
                          <h5 class="card-title">{{ $item->nama }}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Pekerjaan : {{ $item->pekerjaan }}</li>
                          <li class="list-group-item">Alamat : {{ $item->alamat }}</li>
                        </ul>
                      </div>
                </div>
                @endforeach
            </div>
        </center>
      </div>
      </div>
    </div>
  </div>
@endsection
