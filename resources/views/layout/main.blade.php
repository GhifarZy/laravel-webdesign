
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{asset ('landing/assets/css/material-kit.css?v=2.0.7')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset ('landing/assets/demo/demo.css')}}" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  {{-- databtable --}}
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/">
          E - Procurement </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="{{ url('register') }}" class="nav-link" >
              <i class="material-icons">face</i> Register
            </a>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">face</i> Login
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="{{url ('loginMember')}}" class="dropdown-item">
                <i class="material-icons">apps</i> As Member
              </a>
              <a href="{{url ('loginAdmin')}}" class="dropdown-item">
                <i class="material-icons">apps</i> As Admin
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @yield('tag')
  <div class="main main-raised">
    <div class="section section-basic">
      <div class="container">
        <div class="title">
        </div>
      <div class="container">
        <table id="example" class="display" style="padding: 23px;width:100%">
          <thead>
              <tr>
                <th>Tanggal Selesai</th>
                  <th>Direktur Perusahaan</th>
                  <th>Nama Perusahaan</th>
                  <th width="255px" >Nama Pengadaan</th>
              </tr>
          </thead>
          <tbody>
           
            <tr>
              <td style="text-transform:capitalize;" scope="row">Test</td>
              <td style="text-transform:capitalize;" scope="row">Test</td>
              <td style="text-transform:capitalize;" scope="row">Test</td>
              <td style="text-transform:capitalize;" scope="row">Test</td>
            </tr>
           
          </tbody>
        </table>
      </div>
      </div>
    </div>
  </div>
  <!--  End Modal -->
  <footer class="footer" data-background-color="black">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com/">
              E-procurement
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/blog">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="" target="_blank">ifrzdy_</a> 
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  {{-- <script src="{{asset ('landing/assets/js/core/jquery.min.js')}}" type="text/javascript"></script> --}}
  <script src="{{asset ('landing/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{asset ('landing/assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
  <script src="{{asset ('landing/assets/js/plugins/moment.min.js')}}"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{asset ('landing/assets/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset ('landing/assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{asset ('landing/assets/js/material-kit.js?v=2.0.7')}}" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });
    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      });
  </script>
</body>
<style>
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
          background-color:  #9c27b0;
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
      <style>
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
                background-color:  #9c27b0;
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
           
              input[type=text], input[type=password] {
              width: 100%;
              border-radius: 32px;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              box-sizing: border-box;
              }
      
              button {
              background-color: #9c27b0;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              border-radius: 32px;
              cursor: pointer;
              width: 100%;
              }
      
              button:hover {
              opacity: 0.8;
              }
      
              .cancelbtn {
              width: auto;
              padding: 10px 18px;
              background-color: #f44336;
              }
      
              .imgcontainer {
              text-align: center;
              margin: 24px 0 12px 0;
              }
      
              img.avatar {
              width: 40%;
              border-radius: 50%;
              }
      
              .container {
              padding: 16px;
              }
      
              span.psw {
              float: right;
              padding-top: 16px;
              }
      
              /* Change styles for span and cancel button on extra small screens */
              @media screen and (max-width: 300px) {
              span.psw {
                  display: block;
                  float: none;
              }
              .cancelbtn {
                  width: 100%;
              }
              }
            </style>
</html>