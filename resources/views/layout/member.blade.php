
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>@yield('title')</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('style/assets/img/brand/favicon.png')}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('style/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('style/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('style/assets/css/argon.css?v=1.2.0')}}" type="text/css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
     {{-- font --}}
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet">  
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
     
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{url ('dashboardIdMembers')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!--  form -->
          <span style="color: white;
          padding: 12px;
          border-radius: 23px;
          width: 300px;" class="mb-0 text-sm  font-weight-bold">  <i class="ni ni-single-02"></i>&nbsp; Welcome, {{ Auth::User()->level }}</span>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ Auth::User()->username }}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <span class="mb-0 text-sm  font-weight-bold">&nbsp;&nbsp;&nbsp;Status {{ Auth::User()->status }}</span>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logoutMembers') }}" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">@yield('tag')</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">@yield('line')</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              {{-- <a href="{{ route('input') }}" class="btn btn-sm btn-neutral">Buat Pengadan Baru</a> --}}
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-lg">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Members Aktif</h5>
                      <span class="h2 font-weight-bold mb-0">{{ $aktif }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Members Nonaktif</h5>
                      <span class="h2 font-weight-bold mb-0">{{ $nonaktif }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
         
          @yield('content')

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
                        <input type="text" class="form-control" name="nama">
                        <label for="" class="form-label">Username</label>
                        <input type="text" value="{{ Auth::User()->username }}" class="form-control" name="username">
                        <label for="" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan">
                        <label for="" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                        <label for="" class="form-label">Gambar</label>
                        <input type="file" class="form-control" name="gambar">
                    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" style="background-color: #825ee4;color:white" class="btn btn-primary" onclick="return conirm('ingin menyimpan profile ini ? {{ Auth::User()->name }}')" >Submit</button>
                </div>
            </form>
            </div>
            </div>
        </div>
      <div class="row">
      </div>
      <div class="row">
      </div>
      <!-- Footer -->
      <footer style="margin-top: 10px;" class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">ifarziady_</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Github</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">Instagram</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">Portfolio</a>
              </li>
            
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
{{-- 
  {{-- <script src="{{asset('style/assets/vendor/jquery/dist/jquery.min.js')}}"></script> --}}
  <script src="{{asset('style/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('style/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script> 
  <!-- Optional JS -->
  <script src="{{asset('style/assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('style/assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('style/assets/js/argon.js?v=1.2.0')}}"></script>
  @yield('js')
</body>
<style>
   .bg-primary {
      background: linear-gradient( 87deg, #9c27b0 0, #825ee4 100%) !important;
    }
  table.dataTable thead th,
      table.dataTable thead td {
          padding: 10px 18px;
          border-bottom: none;
      }
      
      table.dataTable.no-footer {
          border-bottom: none;
      }
      
      th {
          width: 72px;
          background-color: #9c27b0;
          color: white;
          border: none;
      }
      
      td {
          color: black;
      }
  
          .dataTables_wrapper{
                  padding: 30px;
          }
           img {
          width: 52px;
      }
      </style>
</html>
